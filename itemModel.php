<?php
class ItemModel {
    public function __construct() {
        if (!isset($_SESSION['items'])) {
            $_SESSION['items'] = [];
        }
    }

    public function addItem($name, $price) {
        $item = [
            "name" => $name,
            "price" => $price
        ];
        array_push($_SESSION['items'], $item);
    }

    public function getItems() {
        return $_SESSION['items'];
    }
}
?>
