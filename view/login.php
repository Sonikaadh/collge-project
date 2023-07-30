<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- displays site properly based on user's device -->
  <script src="./images/js.js"></script>
  <link rel="stylesheet" href="style1.css" />
  <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png" />
  <title>Admin</title>
</head>

<body>
  <div class="flex">
    <div>
      <form class="form" name="myform" action="../model/authentication.php" method="post">
        <input type="text" id="username" name="username" placeholder="username" />
        <p id="u" style="
                  color: red;
                  font-size: small;
                  padding-left: 60%;
                  display: none;
                ">
          <i>Userame cannot be empty</i>
        </p>

        <br />
        <input type="password" id="password" name="password" placeholder="Password" />
        <p id="p" style="
                          color: red;
                          font-size: small;
                          padding-left: 60%;
                          display: none;
                        ">
          <i>Password cannot be empty</i>
        </p>
        <br />
        <input id="submit"  type="submit" value="Login" /><br />
      </form>
    </div>
  </div>
</body>
</body>

</html>