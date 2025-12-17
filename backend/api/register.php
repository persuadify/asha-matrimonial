<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require '../config/db.php';

$name  = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$pass  = $_POST['password'] ?? '';

if ($name == '' || $email == '' || $pass == '') {
    echo json_encode(["status" => "error", "msg" => "Missing fields"]);
    exit;
}

$password = password_hash($pass, PASSWORD_DEFAULT);

$stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $password);

if ($stmt->execute()) {
    echo json_encode(["status" => "success"]);
} else {
    echo json_encode(["status" => "error", "msg" => $conn->error]);
}
?>
