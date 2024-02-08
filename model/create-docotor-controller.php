<?php
// session_start();

include "./connection.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $department = $_POST["department"];
    $contact = $_POST["contact"];

    // Check for empty values
    if (!$name || !$department || !$contact) {
        echo "Insufficient data.";
    } else {
        $sql = "INSERT INTO Doctor (Name, Department, Contact) VALUES ('$name', '$department', '$contact')";
        
        if ($connection->query($sql) === TRUE) {
            echo "Successfully inserted.";
        } else {
            echo "Error: " . $sql . "<br>" . $connection->error;
        }
    }
}
?>
