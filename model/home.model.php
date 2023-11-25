<?php
include("config/main.inc.php");

function showProducts(){
    global $cnx;

    $sql = "SELECT * FROM products";

    $req = $cnx->query($sql);

    $products = [];

    while($row = $req->fetch()){
        $products[] = $row;
    }

    return $products;
}
?>