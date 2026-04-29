<?php
include "db.php";
header('Content-Type: application/json');

$user = $_REQUEST['user'] ?? '';
$pass = $_REQUEST['pass'] ?? '';

$sql = "SELECT * FROM users WHERE username='$user' AND password='$pass'";
$res = $conn->query($sql);

if($res && $res->num_rows > 0){
    echo json_encode(["status"=>"success"]);
} else {
    echo json_encode(["status"=>"fail"]);
}
?>