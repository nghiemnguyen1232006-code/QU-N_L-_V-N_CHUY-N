<?php
session_start();

if(isset($_SESSION['user'])){
    echo json_encode(["status"=>"ok"]);
}else{
    echo json_encode(["status"=>"fail"]);
}
?>