<?php
// Database credentials
$dsn = "mysql:host=localhost;dbname=contact_system";
$username = "contact_system_admin";
$password = "Password!";

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully";
} catch(PDOException $e) {
    // echo "Connection failed: " . $e->getMessage();
}