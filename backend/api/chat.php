<?php
require '../config/db.php';
session_start();
$from=$_SESSION['user_id'];
$to=$_POST['to_user'];
$msg=$_POST['message'];

$conn->query("INSERT INTO chats(from_user,to_user,message) VALUES($from,$to,'$msg')");
echo json_encode(["status"=>"sent"]);
?>