<?php

$servername = "localhost";
$dbname = "carpoolrgstr";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password, $dbname);

$email = $_GET['email'];

$stmt = $conn->prepare("UPDATE tbl_users SET user_confirmation = 1 WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->close();

$conn->close();

header('Location: index.html');
exit;