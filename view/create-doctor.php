<?php
include "../model/connection.php";
// $query = "SELECT * FROM user";
// $result = $connection->query($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Doctor</title>
    <style>
        .error {
            color: red;
        }
    </style>
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        header {
            position: sticky;
            top: 0;
            background-color: lavender;

            padding: 10px;
            z-index: 100;
        }

        .navbar {
            display: flex;
            justify-content: center;
        }

        .navbar-list {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .navbar-list li {
            display: inline-block;
            margin-right: 80px;
        }

        .navbar-list li a {
            display: block;
            padding: 15px;
            text-decoration: none;
            color: #000;
            font-weight: bold;
        }

        .navbar-list li a:hover {
            background-color: red;
        }
    </style>
</head>
<body>
<header>
            <nav class="navbar">
                <ul class="navbar-list">
                    <!-- <li><a href="../Pages/home.php">Home</a></li> -->
                    <!-- <li><a href="../Pages/register.php">Register Users</a></li>
                        <li><a href="../Pages/doctors.php">Doctors</a></li> -->
                        <li><a href="./create-doctor.php">Create Doctors</a></li>
                    <li><a href="../view/readuser.php">Users</a></li>
                    <li><a href="./appointmentRead.php"> Appointment List</a></li>
                    <li><a href="./adduser.php">Add User</a></li>
                </ul>
            </nav>
        </header>
<h2>Add Doctor</h2>
<form method="post" action="../model/create-docotor-controller.php">
    Name: <input type="text" name="name">
    <br><br>

    Department: <input type="text" name="department" >
    <br><br>

    Contact: <input type="text" name="contact" >
    <br><br>

    <input type="submit" name="submit" value="Submit">
</form>

</body>
</html>
