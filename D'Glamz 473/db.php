<?php
$servername = "mysql-3d81e3-ethanblackman194-caeb.g.aivencloud.com";
$username = "avnadmin";
$password = "AVNS_vTB5oWJ0EgsUU0YnIUa";
$dbname = "mywebsite";
$port = 21018;

$conn = new mysqli($servername, $username, $password, $dbname, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>