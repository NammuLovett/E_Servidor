<?php

$servername = "Localhost";
$username = "root";
$password = "root";
$dbname = "bdMurallas";

//Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//check connection
if ($conn->connect_error) {
    die("connection failed: " . $conn->connect_error);
}
