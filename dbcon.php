<?php
//Done by vinoth and directly edited in github
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
