<?php
require './config.php';

try {

    $sql = "SELECT Name, Email, Company, Phone FROM users";
    $stmt = $pdo->query($sql);

    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($data);
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>