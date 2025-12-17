<?php
$conn = mysqli_connect(
    "localhost",
    "tuxcepqg_ashauser",
    "Asha@2025StrongDB#",
    "tuxcepqg_ashamatrimonial"
);

if (!$conn) {
    die("DB ERROR: " . mysqli_connect_error());
}
?>
