<?php
 require './config.php';

try {

    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $company = $_POST['company'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $phone = $_POST['phone'];
    
    // Prepare and execute the SQL statement
    $stmt = $pdo->prepare("INSERT INTO users (name, email, company, password, phone) VALUES (:name, :email, :company, :password, :phone)");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':company', $company);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':phone', $phone);
    $stmt->execute();

    echo $_POST['password'] ."<br>";
    eCHO $password;
    echo 'Registration successful';
    header('Location: ../Views/login.php');
} catch(PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}