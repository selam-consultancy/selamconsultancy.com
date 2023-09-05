<?php
// Database configuration
$host = 'localhost';
$dbName = 'client_db';
$username = 'root';
$password = '';

try {
    // Connect to MySQL server
    $db = new PDO("mysql:host=$host", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Create the database
    $db->exec("CREATE DATABASE IF NOT EXISTS $dbName");
    echo "Database created successfully<br>";

    // Switch to the newly created database
    $db->exec("USE $dbName");

    // Create the users table
    $query = 'CREATE TABLE IF NOT EXISTS user_account (
        
        User_Name VARCHAR(50) NOT NULL,
        Email VARCHAR(50) NOT NULL,
        Password_hash VARCHAR(255) NOT NULL
    )';
    $db->exec($query);
    echo "Table created successfully";

} catch (PDOException $e) {
    die("Database error: " . $e->getMessage());
}
?>
