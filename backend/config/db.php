<?php
$host = "localhost";
$db   = "tuxcepgg_ashamatrimonial";
$user = "tuxcepgg_ashauser";
$pass = "APNA_REAL_DATABASE_PASSWORD_YAHAN_DALO";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("DB Error: " . $conn->connect_error);
}
?>
