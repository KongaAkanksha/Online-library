<?php

$host="localhost";
$user="root";
$pass="";
$db="website(lib)";
$conn=new mysqli($host,$user,$pass,$db);
if($conn->connect_error){
    echo "Failed to connect DB".$conn->connect_error;
}
?>
<!-- <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "website(lib)";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?> -->
