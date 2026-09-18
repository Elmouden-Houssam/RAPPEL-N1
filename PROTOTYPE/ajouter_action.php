<?php

require_once "connexion.php";

$name = $_POST["name_item"];
$price = $_POST["price"];
$description = $_POST["description"];
$owner = $_POST["id_owner"];
$category = $_POST["id_category"];

$sql = "INSERT INTO menu_item (name_item, price, description, id_owner, id_category)
VALUES (?, ?, ?, ?, ?)";

$pdo->prepare($sql)->execute([$name, $price, $description, $owner, $category]);

header("Location: index.php");