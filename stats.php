<?php
include "db.php";

$o=$conn->query("SELECT COUNT(*) c FROM orders")->fetch_assoc();
$d=$conn->query("SELECT COUNT(*) c FROM drivers")->fetch_assoc();
$w=$conn->query("SELECT COUNT(*) c FROM warehouse")->fetch_assoc();

echo json_encode([
"orders"=>$o['c'],
"drivers"=>$d['c'],
"warehouse"=>$w['c']
]);
?>