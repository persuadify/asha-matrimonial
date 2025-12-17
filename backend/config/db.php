<?php
$host = "localhost";
$user = "tuxcepgg_asha_live";
$pass = "Asha@Live#2025";
$db   = "tuxcepgg_ashamatrimonial";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("DB ERROR: " . $conn->connect_error);
}
?>
