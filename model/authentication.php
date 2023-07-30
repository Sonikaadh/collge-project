<?php
// session_start();

include "./connection.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["username"];
    $password = $_POST["password"];
    $query = "SELECT * FROM user WHERE email='$email' AND password='$password'";
    if (strlen($email) > 0 && strlen($password) > 0) {
        $result = $connection->query($query);
        if ($result->num_rows === 0) {
            die("No User Found");
        } else {
            echo("You are authorized user");
            // $user = $result->fetch_assoc();
            // echo "<pre>";
            // print_r($user);
            // echo "</pre>";
            // $_SESSION['email'] = $user['email'];
            // $_SESSION['name'] = $user['name'];
            // $_SESSION['id'] = $user['id'];
            // $_SESSION['role'] = $user['role'];
            // header("Location: ../View/Pages/home.php");
            // exit();
        }
    } else {
        return;
    }
}
?>