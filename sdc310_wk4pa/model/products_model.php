<?php
include_once("../db_connect.php");

function getProducts($conn) {
    $sql = "SELECT * FROM products";
    return $conn->query($sql);
}
?>
