<?php
$host="localhost";
$db="asha_matrimonial";
$user="DB_USER";
$pass="DB_PASS";

$conn = new mysqli($host,$user,$pass,$db);
if($conn->connect_error){
  die("DB Connection Failed");
}
?>