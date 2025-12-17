<?php
$host = "localhost";
$user = "tuxcepgg_ashauser";
$pass = "PASTE_PASSWORD_HERE";
$db   = "tuxcepgg_ashamatrimonial";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("DB ERROR: " . $conn->connect_error);
}
?>
