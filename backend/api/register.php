<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



require '../config/db.php';
$name=$_POST['name'] ?? '';
$email=$_POST['email'] ?? '';
$password=password_hash($_POST['password'], PASSWORD_DEFAULT);

$stmt=$conn->prepare("INSERT INTO users(name,email,password) VALUES(?,?,?)");
$stmt->bind_param("sss",$name,$email,$password);
$stmt->execute();
echo json_encode(["status"=>"success"]);
?>
