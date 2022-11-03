<?php

function bdConnect()
{
    $servername = "localhost";
    $username = "";
    $password = "";
    $dbname = "myDB";

    //Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    //check connection
    if ($conn->connect_error) {
        die("connection failed: " . $conn->connect_error);
    }
}
