<?php
// Database configuration for Docker environment
$dbuser = "root";
$dbpass = "hospital123";  // Updated password for security
$host = "db";             // Docker service name instead of localhost
$db = "hospital";         // Database name (uppercase as per SQL dump)

// Create MySQL connection
$mysqli = new mysqli($host, $dbuser, $dbpass, $db);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Set charset to utf8
$mysqli->set_charset("utf8");

// Optional: Display connection status (remove in production)
// echo "Connected successfully to database: " . $db;
