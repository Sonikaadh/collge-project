<?php
include "../model/connection.php";
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = $_GET["id"];
    $query = "SELECT * FROM user WHERE id= '$id'";
    $result = $connection->query($query);
    $candidate = $result->fetch_assoc();
}
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
                <form class="form" name="myform" autocomplete="false" action="../controller/update-user.php" method="post">
                    <input type="text" id="First Name" name="name" placeholder="Name" value="<?php echo $candidate['name']; ?>" required />
                    <input type="email" id="Email" name="email" placeholder="Email" value="<?php echo $candidate['email']; ?>" required />
                    <input type="hidden" name="id"  value="<?php echo $candidate['id']; ?>">
                    <input id="submit" type="submit" value="Update" /><br />
                </form>
            </div>
</body>

</html>