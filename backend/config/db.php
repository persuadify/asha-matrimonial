<?php
$host = "localhost";
$user = "tuxcepgg_asha_live";   // exact user
$pass = "Asha@Live#2025";    // exact password
$db   = "tuxcepgg_ashamatrimonial";
$socket = "/var/lib/mysql/mysql.sock"; // MOST IMPORTANT

$conn = new mysqli($host, $user, $pass, $db, null, $socket);

if ($conn->connect_error) {
    die("DB CONNECTION FAILED: " . $conn->connect_error);
}
?>
