<?php
//Done by vinoth and check the files for checking the trunk
// Database configuration for Mysql 
$dbHost     = "localhost"; 
$dbUsername = "root";
$dbPassword = ""; //No Password
$dbName     = "test";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>
