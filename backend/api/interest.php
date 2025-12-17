<?php
require '../config/db.php';
session_start();
$from=$_SESSION['user_id'];
$to=$_POST['to_user'];

$conn->query("INSERT INTO interests(from_user,to_user,status) VALUES($from,$to,'pending')");
echo json_encode(["status"=>"sent"]);
?>