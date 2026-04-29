<?php
include "db.php";

$user = $_POST['user'];
$pass = $_POST['pass'];

$conn->query("INSERT INTO users(username,password) VALUES('$user','$pass')");

echo json_encode(["status"=>"success"]);
?>