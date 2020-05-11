<?php

namespace model;


class ProductDB
{
    public $conn;

    public function __construct($connection)
    {
        $this->conn = $connection;
    }

    public function getAllProducts()
    {
        $sql = "SELECT * FROM products";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        $products = [];
        foreach ($result as $item) {
            $product = new Product($item['name'], $item['price'], $item['description'], $item['producer']);
            $product->setId($item['id']);
            array_push($products, $product);
        }
        return $products;
    }

    public function addProduct($product)
    {
        $sql = "INSERT INTO products(name, price, description, producer) VALUES (?,?,?,?)";
        $stmt = $this->conn->prepare($sql);
        $name = $product->getName();
        $price = $product->getPrice();
        $description = $product->getDescription();
        $producer = $product->getProducer();
        return $stmt->execute(array($name, $price, $description, $producer));
    }

    public function updateProduct($id, $newProductInfo)
    {
        $sql = "UPDATE products SET name = ?, price = ?, description = ?,producer =? WHERE id = $id";
        $stmt = $this->conn->prepare($sql);
        $newName = $newProductInfo->getName();
        $newPrice = $newProductInfo->getPrice();
        $newDescription = $newProductInfo->getDescription();
        $newProducer = $newProductInfo->getProducer();
        return $stmt->execute(array($newName, $newPrice, $newDescription, $newProducer));
    }

    public function getProductById($id)
    {
        $sql = "SELECT * FROM products WHERE id = $id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch();
        $product = new Product($result['name'], $result['price'], $result['description'], $result['producer']);
        $product->setId($result['id']);
        return $product;
    }

    public function deleteProduct($id)
    {
        $sql = "DELETE FROM products WHERE id= $id";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute();
    }

    public function searchByName($keyword)
    {
        $sql = "SELECT * FROM products WHERE name LIKE :keyword";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(':keyword','%'.$keyword.'%');
        $stmt->execute();
        $result = $stmt->fetchAll();
        $products = [];
        foreach ($result as $item) {
            $product = new Product($item['name'], $item['price'], $item['description'], $item['producer']);
            $product->setId($item['id']);
            array_push($products, $product);
        }
        return $products;
    }
}