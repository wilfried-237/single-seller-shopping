<?php
include("config/main.inc.php");

function showCard(){
    global $cnx;

    $sql = "SELECT * FROM card";

    $req = $cnx->query($sql);

    $cards = [];

    while($row = $req->fetch()){
        $cards[] = $row;
    }

    return $cards;
}

function showCards(){
    global $cnx;

    $sql = "SELECT * FROM card";

    $req = $cnx->query($sql);

    $cards = [];

    while($row = $req->fetch()){
        $cards[] = $row;
    }

    return $cards;
}

function addCards($name,$price,$quantity,$image){
    global $cnx;

    $sql = "INSERT INTO card values('$name','$price','$quantity','$image')";

    $req = $cnx->query($sql);

    $cards = [];

    while($row = $req->fetch()){
        $cards[] = $row;
    }

    return $cards;
}








?>