<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <script src="./script.js"></script>
  <link rel="stylesheet" href="style.css" />
  <link rel="icon" type="image/png" sizes="32x32" href="../images/favicon-32x32.png" />
  <title>Appointment Scheduling</title>
</head>

<body>

  <div class="flex">
    <div class="text">
      <h1>MEDISCHEDULING</h1>
      <img src="../images/OIP.jpg" class="center">
      <p>
        Medischeduling is an appointment scheduling system designed for hospitals and healthcare facilities. It simplifies the appointment management process, benefiting both patients and healthcare providers. With user-friendly interfaces and real-time access to doctor availability, patients can easily book appointments, resulting in convenience and improved patient satisfaction.
      </p>
    </div>
    <div>

      <form class="form" id="myForm" onsubmit="return handlesubmit()" action="../model/appointment.php" method="post">
        <label for="name">Name:</label><br />
        <input type="text" id="name" name="name" placeholder="Name" />
        <p id="f" style="
              color: red;
              font-size: small;
              padding-left: 60%;
              display: none;
            ">
          <i>Name cannot be empty</i>
        </p>

        <br />
        <label>Email</label><br>
        <input type="email" id="email" name="email" placeholder="Email Address" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" />
        <p id="m" style="
              color: red;
              font-size: small;
              padding-left: 60%;
              display: none;
            ">
          <i>Looks like this is not an email</i>
        </p>
        <br />
        <label for="phone">Phone number:</label><br />
        <input type="tel" id="phone" name="phone" placeholder="Number" placepattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">

        <p id="p" style="
              color: red;
              font-size: small;
              padding-left: 60%;
              display: none;
            ">
          <i>Number cannot be empty</i>
        </p>
        <br />
        <label>Date</label><br>
        <input type="date" id="date" name="date" />
        <p id="d" style="
              color: red;
              font-size: small;
              padding-left: 60%;
              display: none;
            ">
          <i>Choose Date</i>
        </p>
        <br />
        <label for="Doctors">Choose a doctor:</label>
        <select name="Doctors" id="Doctors">
          <option value="Physico and nutrition">Physico and nutrition</option>
          <option value="obstetrics and gynecology">Obstetrics and gynecology</option>
          <option value="dermatologist">Dermatologist</option>
          <option value="neurology">Neurology</option>
          <option value="dentist">Dentist</option>
          <option value="ophthalmologists and optometrists">Ophthalmologists and Optometrists</option>
          <option value="cardiologist">Cardiologist</option>
          <option value="general Surgeon">General Surgeon</option>
          <option value="radiologist">Radiologist</option>
          <option value="pediatrician">Pediatrician</option>
          <option value="gastroenterologist">Gastroenterologist</option>
          <option value="Andrologist,urologist">Andrologist, Urologist</option>
          <option value="pulmonologist">Pulmonologist</option>
          <p id="d" style="
              color: red;
              font-size: small;
              padding-left: 60%;
              display: none;
            ">
        </select><br />
        <div>
          <label>Gender</label><br></br>
          <select name="gender" id="">
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="others">Others</option>
          </select>
          <!-- <input type="radio" name="rad" value="male" /><label>Male</label>
          <input type="radio" name="rad" value="female" /><label>Female</label>
          <input type="radio" name="rad" value="others" /><label>Other</label> -->
        </div>
        <p id="r" style="
              color: red;
              font-size: small;
              padding-left: 60%;
              display: none;
            ">
          <i>Choose One</i>
        </p>
        <br />
        <input id="submit" type="submit" value="Book Appointment" /><br />
        <!-- <button id="submit" type="submit">Book Appointment</button> -->
      </form>
      <!-- <script src="validate_form.js"></script> -->
    </div>
  </div>
</body>
<script>
  function handlesubmit() {
    let form = document.querySelector("#myForm");
    let name = document.getElementById("name").value;
    if (name.length < 10) {
      console.log(name);
      alert("please insert name with valid length")
      return false
    }
    let email = document.getElementById("email").value;
    console.log(email)
    let phone = document.getElementById("phone").value;
    console.log(phone)
    let date = document.getElementById("date").value;
    console.log(date)
    let Doctors = document.getElementById("Doctors").value;
    console.log(Doctors)
    return true
    // document.querySelector("#myForm").submit()

    // document.getElementById("cn").innerHTML="Book Appointment";
    // var xhttp = new XMLHttpRequest();
    // xhttp.onreadystatechange = function () {
    //   if (this.readyState == 4 && this.status == 200) {
    //     document.getElementById("cng").innerHTML = this.responseText;
    //   }
    // };
    // xhttp.open("GET", "login.html", true);
    // xhttp.send();
  }
</script>

</html>