<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- displays site properly based on user's device -->
    <script src="./view/script.js"></script>
    <link rel="stylesheet" href="style.css" />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="./images/favicon-32x32.png"
    />
    <script>
      function login() {
        document.getElementById("cn").innerHTML="Book Appointment";
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById("cng").innerHTML = this.responseText;
          }
        };
        xhttp.open("GET", "login.html", true);
        xhttp.send();
      }
    </script>
    <title>Simple Hospital Management System</title>
  </head>

  <body>
    <div class="flex">
      <div class="text">
        <h1>Hospital Management System</h1>

        <p>
          A hospital management system helps in managing patient records,
          appointments, billing, inventory, and other essential functions. By
          digitizing and centralizing data, it improves efficiency, reduces
          errors, enhances communication, and enables better decision-making for
          healthcare providers and administrators.
        </p>
      </div>
      <div>
        <section onclick="login()">
          <b id="cn">Login</b>
        </section>
        <br /><br />
        <form class="form" id="cng" name="myform">
          <input type="text" id="name" name="name" placeholder="Name" />
          <p
            id="f"
            style="
              color: red;
              font-size: small;
              padding-left: 60%;
              display: none;
            "
          >
            <i>Name cannot be empty</i>
          </p>

          <br />
          <input
            type="email"
            id="mail"
            name="mail"
            placeholder="Email Address"
            pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
          />
          <p
            id="m"
            style="
              color: red;
              font-size: small;
              padding-left: 60%;
              display: none;
            "
          >
            <i>Looks like this is not an email</i>
          </p>
          <br />
          <input type="number" id="number" name="number" placeholder="Number" />
          <p
            id="p"
            style="
              color: red;
              font-size: small;
              padding-left: 60%;
              display: none;
            "
          >
            <i>Number cannot be empty</i>
          </p>
          <br />
          <input type="date" id="date" name="date" />
          <p
            id="d"
            style="
              color: red;
              font-size: small;
              padding-left: 60%;
              display: none;
            "
          >
            <i>Choose Date</i>
          </p>
          <br />
          <div>
            <input type="radio" name="rad" value="male" /><label>Male</label>
            <input type="radio" name="rad" value="female" /><label
              >Female</label
            >
            <input type="radio" name="rad" value="others" checked /><label
              >Prefer Not to Say</label
            >
          </div>
          <p
            id="r"
            style="
              color: red;
              font-size: small;
              padding-left: 60%;
              display: none;
            "
          >
            <i>Choose One</i>
          </p>
          <br />
          <input
            id="submit"
            onclick="empty()"
            type="button"
            value="Book Appointment"
          /><br />

          <p style="color: hsl(246, 25%, 77%)">
            By clicking the button, you are agreeing to our
            <span style="color: red; cursor: pointer">Terms and Services</span>
          </p>
        </form>
      </div>
    </div>
  </body>
</html>
