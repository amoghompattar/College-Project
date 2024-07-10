<?php include("connection.php");?>


<!DOCTYPE html>
<!---Coding By CodingLab | www.codinglabweb.com--->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!--<title>Registration Form in HTML CSS</title>-->
    <!---Custom CSS File--->
    <link rel="stylesheet" href="contactus.css" />
  </head>
  <body>
    <section class="container">
      <header>Registration Form</header>
      <form action="gymindex.php" class="form" method="POST">
        <div class="input-box">
          <label>Full Name</label>
          <input type="text" class="input" placeholder="Enter full name" name="fname">
        </div>

        <div class="input-box">
          <label>Email Address</label>
          <input type="text" class="input" placeholder="Enter email address" name="email">
        </div>

        <div class="column">
          <div class="input-box">
            <label>Phone Number</label>
            <input type="number" class="input" placeholder="Enter phone number" name="phonenumber">
          </div>
          <div class="input-box">
            <label>Birth Date</label>
            <input type="date" class="input" placeholder="Enter birth date" name="bday">
          </div>
        </div>
        <div class="gender-box">
          <h3>Gender</h3>
          <div class="gender-option">
            <div class="gender">
              <input type="radio" id="check-male" name="gender" checked />
              <label for="check-male">male</label>
            </div>
            <div class="gender">
              <input type="radio" id="check-female" name="gender" />
              <label for="check-female">Female</label>
            </div>
            <div class="gender">
              <input type="radio" id="check-other" name="gender" />
              <label for="check-other">prefer not to say</label>
            </div>
          </div>
        </div>
        <div class="input-box address">
          <label>Address</label>
          <input type="text" class="input" placeholder="Enter street address" name="address">
          <div class="column">
            <input type="text" class="input" placeholder="Enter your city" name="city">
            <input type="number" class="input" placeholder="Enter postal code" name="code">
          </div>
        </div>
       <div class="input_field">
       <input type="submit" value="submit" class="btn" name="submit">
       </div>
      </form>
    </section>
  </body>
</html>

<?php
      if (isset($_POST['contactus']))
       {
  $fname       = $_POST['fname'];
  $email       = $_POST['email'];
  $phonenumber = $_POST['phonenumber'];
  $bday        = $_POST['bday'];
  $gender      = $_POST['gender'];
  $address     = $_POST['address'];
  $city        = $_POST['city'];
  $code        = $_POST['code'];
  $query = "INSERT INTO gymdata VALUES( '$fname', '$email','$phonenumber','$bday','$gender','$address' , '$city', '$code')";
  $data = mysqli_query($connection,$query);
 if($data)
 {
  echo "Data inserted";
 }
 else
 {
  echo "Data not inserted";
 }
 }
?>
