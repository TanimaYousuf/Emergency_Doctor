<?php

$server = "127.0.0.1";
$user = "root";
$pass = "";
$db = "emrg_doc";

$conn = new mysqli($server, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>

