<?php
include("../config/main.inc.php");

function showCards(){
    global $cnx;

    $sql = "SELECT * FROM cards";

    $req = $cnx->query($sql);

    $cards = [];

    while($row = $req->fetch()){
        $cards[] = $row;
    }

    return $cards;
}

function addCards($name,$price,$quantity,$image){
    global $cnx;
   

    $sql = "INSERT INTO cards(name_card, price_card, quantity_card, image_card) VALUES('$name','$price','$quantity','$image')";
    $req = $cnx->query($sql);

    return $sql;
}








?>