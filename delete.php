<?php

require './db.php';

$id =  $_GET['id'] ?? null;

if(!$id){
    header("Location: index.php");
    exit;
}

// if it gets here we have an id
$statement = $db->prepare("DELETE FROM CUSTOMERS WHERE CustomerID =:id");
$statement->bindValue("id", $id);
$statement->execute();
header("Location: index.php");


