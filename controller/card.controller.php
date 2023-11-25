<?php 


if(isset($_POST["add"])){
    $name = $_POST["name"];
    $price = $_POST["price"];
    $quantity = $_POST["quantity"];
    $image = $_POST["image"];

    addCards($name,$price,$quantity,$image);
}

showCards();






?>