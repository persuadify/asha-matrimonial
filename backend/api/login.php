<?php
require '../config/db.php';
$email=$_POST['email'];
$password=$_POST['password'];

$res=$conn->query("SELECT * FROM users WHERE email='$email'");
$user=$res->fetch_assoc();
if($user && password_verify($password,$user['password'])){
  session_start();
  $_SESSION['user_id']=$user['id'];
  echo json_encode(["status"=>"success"]);
}else{
  echo json_encode(["status"=>"error"]);
}
?>