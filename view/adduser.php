<?php
include "../model/connection.php";
$query = "SELECT * FROM user";
$result = $connection->query($query);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Patient List</title>
    <link rel="stylesheet" href="../style/index.css">
    <link rel="stylesheet" href="style1.css" />
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        tr {
            text-align: center;
        }

        th {
            background-color: red;
            color: #fff;
        }

        th,
        tr {
            border: 1px solid black;
            padding: 8px;
        }

        .dangerBtn {
            background-color: red;
            color: #fff;
            border: none;
            padding: 0.5rem 1rem;
            font-size: 1.1rem;
        }

        .successBtn {
            background-color: green;
            color: #fff;
            border: none;
            padding: 0.5rem 1rem;
            font-size: 1.1rem;
        }

        button {
            cursor: pointer;
        }

        td:last-child {
            padding: 0.5rem;
            display: flex;
            gap: 1rem;
            justify-content: center;
            /* border: none; */
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
            background-color: red;

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
    <div class="container">
        <header>
            <nav class="navbar">
                <ul class="navbar-list">
                    <li><a href="../view/readuser.php">Users</a></li>
                    <li><a href="./appointmentRead.php">Book Appointment</a></li>
                    <li><a href="./adduser.php">Add User</a></li>
                </ul>
            </nav>
        </header>
        <div class="flex">
    <div>
      <form class="form" name="myform"  method="post">
        <input type="text" id="First Name" name="First Name" placeholder="First Name" />
        <input type="text" id="Last Name" name="Last Name" placeholder="Last Name" />
        <input type="Email" id="Email" name="Email" placeholder="Email" />
        <input type="password" id="password" name="password" placeholder="Password" /><br />
        <input id="submit" type="submit" value="Register" /><br />
      </form>
    </div>
</body>

</html>