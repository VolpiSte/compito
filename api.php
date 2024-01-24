<?php
$param = $_POST["k"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mastroianni";

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT * FROM `esempio` WHERE `nome` LIKE '%$param%'";

$result = $conn->query($sql);

$res = $result->fetch_all();
foreach ($res as $r) {
    echo '<div class="user">' . $r[1] . ' <button class="delete-btn" data-id="' . $r[0] . '">Delete</button></div>';
}

?>
