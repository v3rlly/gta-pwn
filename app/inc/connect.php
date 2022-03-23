<?php
// Database credentials
$host = 'mysql_db';
$user = 'ademiro';
$pass = 'p@ssw0rd';
$database = 'webvuln';

// Connect to MySQL server
$conn = new mysqli($host, $user, $pass, $database);
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}
else { /* echo "Connected to MySQL."; */ }

?>
