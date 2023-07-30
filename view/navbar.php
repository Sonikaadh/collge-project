<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="./style.css"/>

</head>
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

<body>
    <header>
        <nav class="navbar">
            <ul class="navbar-list">
                <li><a href="../Pages/home.php">Home</a></li>
                <li><a href="../Pages/register.php">Register Users</a></li>
                <li><a href="../Pages/doctors.php">Doctors</a></li>
                <li><a href="../Pages/patient.php">Users</a></li>
                <li><a href="../Pages/appointment.php">Book Appointment</a></li>
            </ul>
        </nav>
    </header>
</body>
</html>