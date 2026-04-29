<?php
include "db.php";

header("Content-Type: application/json");

$res=$conn->query("SELECT * FROM drivers");

$data=[];

while($row=$res->fetch_assoc()){
$data[]=$row;
}

echo json_encode($data);
?>