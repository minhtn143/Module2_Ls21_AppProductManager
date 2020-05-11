<?php

namespace model;

use model\DBConnect;
use model\Product;
use model\ProductDB;

class ProductController
{
    public $productDB;

    public function __construct()
    {
        $conn = new \model\DBConnect("mysql:host=localhost;dbname=productManager", "admin", "kie14392");
        $this->productDB = new ProductDB($conn->connect());
    }

    public function index()
    {
        $products = $this->productDB->getAllProducts();
        include "view/list.php";
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            include "./view/add.php";
        } else {
            $name = $_REQUEST['name'];
            $price = $_REQUEST['price'];
            $description = $_REQUEST['description'];
            $producer = $_REQUEST['producer'];

            $product = new Product($name, $price, $description, $producer);
            $this->productDB->addProduct($product);
            $message = "PRODUCT ADDED";
            include "./view/add.php";
        }
    }

    public function update()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $product = $this->productDB->getProductById($id);
            include "./view/update.php";
        } else {
            $id = $_POST['id'];
            $product = new \model\Product($_REQUEST['name'], $_REQUEST['price'], $_REQUEST['description'],
                $_REQUEST['producer']);
            $this->productDB->updateProduct($id, $product);
            header("Location:index.php");
        }
    }

    public function delete()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $product = $this->productDB->getProductById($id);
            include "./view/delete.php";
        } else {
            $id = $_POST['id'];
            $this->productDB->deleteProduct($id);
            header("Location:index.php");
        }
    }

    public function details()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $product = $this->productDB->getProductById($id);
            include "./view/details.php";
        }
    }

    public function search()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $keyword = $_REQUEST['keyword'];
            $products = $this->productDB->searchByName($keyword);
            include "view/search.php";
        }

    }
}