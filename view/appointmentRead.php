<?php
include "../model/connection.php";
$query = "SELECT * FROM appointment";
$result = $connection->query($query);
// $row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Candidate List</title>
    <link rel="stylesheet" href="../style/index.css">
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
                    <!-- <li><a href="../Pages/home.php">Home</a></li>
                    <li><a href="../Pages/register.php">Register Users</a></li>
                    <li><a href="../Pages/doctors.php">Doctors</a></li> -->
                    <li><a href="./readuser.php">Users</a></li>
                    <li><a href="./appointmentRead.php">Appointment List</a></li>
                    <li><a href="./adduser.php">Add User</a></li>
                </ul>
            </nav>
        </header>
        <table>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>date</th>
                <th>department</th>
                <th>gender</th>
                <th>action</th>
            </tr>
            <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td>
                    <?php echo $row["name"]; ?>
                </td>
                <td>
                    <?php echo $row["email"]; ?>
                </td>
                <td>
                    <?php echo $row["phone"]; ?>
                </td>
                <td>
                    <?php echo $row["date"]; ?>
                </td>
                <td>
                    <?php echo $row["department"]; ?>
                </td>
                <td>
                    <?php echo $row["gender"]; ?>
                </td>
                <td>
                    <!-- <a href="../../View/Pages/updateVoters.php?id=<?php echo $row["id"]; ?>"><button class="successBtn">Edit</button></a> -->
                    <a href="../controller/delete_appointment.php?id=<?php echo $row["id"]; ?>"><button class="dangerBtn">Delete</button></a>
                </td>
            </tr>
            <?php endwhile; ?>
        </table>
    </div>
</body>

</html>