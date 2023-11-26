<?php 
include("../model/card.model.php");

if(isset($_GET["add"])){
    $name = $_GET["name"];
    $price = $_GET["price"];
    $quantity = $_GET["quantity"];
    $image = $_GET["image"];

    addCards($name,$price,$quantity,$image);
}

$cards = showCards();






?>