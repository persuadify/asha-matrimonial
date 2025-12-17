<?php
$host = "localhost";
$user = "tuxcepgg_ashauser";
$pass = "9$x,VB}eFkb,";
$db   = "tuxcepgg_ashamatrimonial";
$socket = "/var/lib/mysql/mysql.sock";

$conn = new mysqli($host, $user, $pass, $db, null, $socket);

if ($conn->connect_error) {
    die("DB CONNECTION FAILED: " . $conn->connect_error);
}
?>
