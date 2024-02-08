<?php
include "../model/connection.php";
$uid = $_POST["id"];
if ($uid) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $query = "UPDATE user SET name=?, email=? WHERE id=?";
    try {
        $statement = $connection->prepare($query);
        $statement->bind_param("ssi", $name, $email, $uid);
        $statement->execute();
        if ($statement->affected_rows > 0) {
            echo '<script>alert("User updated successfully");</script>';
            header("Location: ../view/readuser.php");
            exit();
        } else {
            echo '<script>alert("Failed to update.");</script>';
            header("Location: ../view/readuser.php");
            exit();
        }
    } catch (\Throwable $th) {
        die($th);
    }
}
