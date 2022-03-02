<?php
$servername = "sql106.epizy.com";
$username = "epiz_31173876";
$password = "yhrrK4w9ZWPLW";
$db_name = "epiz_31173876_admin";

// Create connection
$conn = new mysqli($servername, $username, $password,$db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
    echo "Connected successfully";
}
