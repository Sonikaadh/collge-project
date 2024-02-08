<?php
include "../model/connection.php";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = $_GET["id"];
    $query = "DELETE FROM appointment WHERE id = ?";
    echo $id;
    try {
        $statement = $connection->prepare($query);
        $statement->bind_param("i", $id);
        $statement->execute();
        if ($statement->affected_rows > 0) {
            header("Location: ../view/appointmentRead.php");
            exit();
        } else {
            header("Location: ../view/appointmentRead.php");
            exit();
        }
        // $statement->close();
    } catch (\Throwable $th) {
        echo $th;
    }
}
?>