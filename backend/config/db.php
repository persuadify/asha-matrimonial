<?php
$host = "localhost";
$user = "tuxcepgg_ashauser";
$pass = "1T*m[^jo^^he";
$db   = "tuxcepgg_ashamatrimonial";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("DB ERROR: " . $conn->connect_error);
}
?>
