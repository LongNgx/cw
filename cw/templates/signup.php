<?php
include "../include/DatabaseConnection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    try {
        // Prepare and execute the SQL statement
        $stmt = $pdo->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
        $stmt->execute([$name, $email, $password]);

        // Redirect to a success page or do something else
        header("Location: signupok.php");
        exit();
    } catch (PDOException $e) {
        // Handle database insertion error
        echo "Error: " . $e->getMessage();
    }
}
?>


