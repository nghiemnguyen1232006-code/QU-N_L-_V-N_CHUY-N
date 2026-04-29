<?php
include "db.php";
header("Content-Type: application/json");

// 👉 LẤY METHOD
$method = $_SERVER['REQUEST_METHOD'];

// ================= GET =================
if($method == "GET"){
    $res = $conn->query("SELECT * FROM orders");
    $data = [];
    while($row = $res->fetch_assoc()){
        $data[] = $row;
    }
    echo json_encode($data);
}

// ================= ADD =================
if($method == "POST"){
    $code = $_POST['code'];
    $product = $_POST['product'];

    $conn->query("INSERT INTO orders(code,product) VALUES('$code','$product')");
    echo json_encode(["status"=>"added"]);
}

// ================= UPDATE =================
if($method == "PUT"){
    parse_str(file_get_contents("php://input"), $_PUT);

    $id = $_PUT['id'];
    $product = $_PUT['product'];

    $conn->query("UPDATE orders SET product='$product' WHERE id=$id");
    echo json_encode(["status"=>"updated"]);
}

// ================= DELETE =================
if($method == "DELETE"){
    parse_str(file_get_contents("php://input"), $_DEL);

    $id = $_DEL['id'];

    $conn->query("DELETE FROM orders WHERE id=$id");
    echo json_encode(["status"=>"deleted"]);
}
?>