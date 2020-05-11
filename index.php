<?php
require "model/DBConnect.php";
require "model/Product.php";
require "model/ProductDB.php";
require "controller/ProductController.php"
?>

<!<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>PRODUCT MANAGER</title>
</head>
<body>

<div class="container">
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand">Product Manager</a>
        <form class="form-inline" method="get">
            <input type="hidden" name="page" value="search">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="keyword" id="keyword" >
            <button class="btn-success" type="submit">Search</button>
<!--            <a class="btn btn-primary" href="./index.php?page=search&search=$('#keyword').value()" role="button" type="submit">Search</a>-->
        </form>
    </nav>
    <?php
    $controller = new \model\ProductController();
    $page = isset($_REQUEST['page']) ? $_REQUEST['page'] : null;
    switch ($page) {
        case 'add':
            $controller->add();
            break;
        case 'delete':
            $controller->delete();
            break;
        case 'update':
            $controller->update();
            break;
        case 'details':
            $controller->details();
            break;
        case 'search':
            $controller->search();
            break;
        default:
            $controller->index();
            break;
    }
    ?>

</div>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>
</html>