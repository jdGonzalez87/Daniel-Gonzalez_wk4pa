<?php
include_once("../model/products_model.php");

$products = getProducts($conn);

include("../view/display_products.php");
?>
