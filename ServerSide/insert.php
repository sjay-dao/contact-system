<?php
require './config.php';

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO your_table (column1, column2, column3) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $param1, $param2, $param3);



$stmt->execute();

echo "New record created successfully";

$stmt->close();
$conn->close();

try
{
    // Create a PDO instance
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt->bind_param("sss", $param1, $param2, $param3);
    // Prepare the SQL statement
    $stmt = $pdo->prepare("INSERT INTO users (name, email, password,company, phone) VALUES (:name, :email, :password, :company, :phone)");

    // Bind the parameter
    $param1 = $_POST['name'];
    $param2 = $_POST['email'];
    $param3 = $_POST['password'];
    $param4 = $_POST['phone'];
    $param4 = $_POST['company'];

    // Execute the statement
    $stmt->execute();

    // Fetch the result
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        // User found
        echo "User found: " . $user['name']; // Example: Accessing the user's name
    } else {
        // User not found
        echo "User not found";
    }
}catch(PDOException $e) {
echo "Error: " . $e->getMessage();
}
?>


