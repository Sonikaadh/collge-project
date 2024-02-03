<?php
include "./connection.php";
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$date = $_POST["date"];
$Doctors = $_POST["Doctors"];
$gender = $_POST["gender"];
$query = "INSERT INTO appointment(name,email,phone,date,department,gender) VALUES(?,?,?,?,?,?)";
try {
    $statement = $connection->prepare($query);
    $statement->bind_param("ssssss", $name,$email,$phone,$date,$Doctors,$gender);
    $statement->execute();
    echo '<script>alert("Appointment Booked Successfully")</script>';
        header("Location: ../view/index.php");
        exit();
    // if ($statement->affected_rows > 0) {
    // } else {
    //     echo '<script>alert("Failed to insert into database")</script>';
    //     header("Location: ../view/index.php");
    //     exit();
    // }

    // $statement->close();
} catch (\Throwable $th) {
    die($th);
}
