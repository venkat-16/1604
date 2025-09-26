<?php
$servername = "localhost";
$username = "id21619186_dina";
$password = "Dinakar11@";
$database_name = "id21619186_registration_db";
//Create connection
$conn = new mysqli($servername, $username, $password, $database_name);

// Check Connection
if ($conn->connect_error) {
    die("Connection failed:" . $conn->connect_error);
}
echo "Connected Successfully";
?>