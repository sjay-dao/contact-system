<?php
require './config.php';
session_start();
try {
    // Prepare the SQL statement
    $stmt = $pdo->prepare("SELECT id, password FROM users WHERE email = :username");

    // Bind the parameter
    $username = $_POST['username'];
    $stmt->bindParam(':username', $username, PDO::PARAM_STR);

    // Execute the statement
    $stmt->execute();

    // Fetch the result
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($result && password_verify($_POST['password'], $result['password'])) {
       
        $_SESSION['user_id'] = $result['id'];
       
        echo "<script>
        localStorage.setItem('isloggedIn', 'dsadwqdsada');
        console.log(localStorage.getItem('isLoggedIn'));
         window.location.href = '../Views/Contact.php';</script>";
         exit(); // Important to stop execution after redirect
    } else {
        // User not found or incorrect password
        echo "Invalid username or password"; // Provide more specific feedback
    }
} catch(PDOException $e) {
    // Handle specific exceptions if needed
    echo "Database error: " . $e->getMessage();
}

?>