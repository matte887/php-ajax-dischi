<?php 
$genre = $_GET["genre"];
include __DIR__ . "/../database.php";
$discs_json = json_encode($database);
header("Content-Type: application/json");
echo $discs_json;
?>