<?php
session_start();  // Mulai session

require_once 'ItemModel.php';

$model = new ItemModel();

if (isset($_POST['name']) && isset($_POST['price']) && $_GET['action'] == 'addItem') {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $model->addItem($name, $price);
    header("Location: index.php");
    exit;
}

if (isset($_GET['action']) && $_GET['action'] == 'showForm') {
    include 'views/form.php';
    exit;
}

$items = $model->getItems();
include 'views/items.php';
