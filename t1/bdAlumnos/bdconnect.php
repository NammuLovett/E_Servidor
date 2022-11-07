<?php

$servername = "sql8.freesqldatabase.com";
$username = "sql8549718";
$password = "5TdgcXhX45";
$dbname = "sql8549718";

//Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//check connection
if ($conn->connect_error) {
    die("connection failed: " . $conn->connect_error);
}
