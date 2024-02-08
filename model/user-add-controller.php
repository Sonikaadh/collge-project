<?php
// session_start();

include "./connection.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Assuming you have a form with fields: email, password, name
    $email = $_POST["email"];
    $password = $_POST["password"];
    $name = $_POST["name"];

    // Check for empty values
    if (!$email || !$password || !$name) {
        echo "Insufficient data.";
    } else {
        // Hash the password for better security
        // $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // SQL query to insert data into User table
        $sql = "INSERT INTO User (email, password, name) VALUES ('$email', '$password', '$name')";

        if ($connection->query($sql) === TRUE) {
            echo "Successfully inserted.";
        } else {
            echo "Error: " . $sql . "<br>" . $connection->error;
        }
    }
}
?>
