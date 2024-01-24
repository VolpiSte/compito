<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mastroianni";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$userId = $_POST['id'];

$sql = "DELETE FROM `esempio` WHERE `id` = $userId";

if ($conn->query($sql) === TRUE) {
    echo "User deleted successfully";
} else {
    echo "Error deleting user: " . $conn->error;
}

$conn->close();

?>
