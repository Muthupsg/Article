<html>
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
    <!-- BOOTSTRAP 4 -->
    <link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.min.css">
    <!-- FONT AWESOEM -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  </head>

<body>
<script type="text/javascript">
function phonenumber()
{
	var inputtxt=document.form1.phone;
  var phoneno = /^\d{10}$/;
  if((inputtxt.value.match(phoneno)))
        {
      return true;
        }
      else
        {
        alert("Enter a valid phone number");
        return false;
        }
}
function checkpass()
{
	var pass1=document.form1.pass.value;
	var pass2=document.form1.cpass.value;
  if(pass1===pass2)
        {
      return true;
        }
      else
        {
        alert("passwords are mismatch");
        return false;
        }
}
</script>
<nav class="navbar navbar-expand-lg navbar-inverse navbar-fixed-top scrolling-navbar"
    style="width:100%; background-color: #00ff;">
    <div class="container-fluid" style="width:100%;">
      <a class="navbar-brand" style="color: #ffffff;" href="index.php">
        <i class="fas fa-hospital"></i>
        Times Articles </a>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.php" style="color: #ffffff;">
            Home
          </a>
        </li>
		<li class="nav-item">
          <a href='login.php' class="nav-link" style="color: #ffffff;">
            Login
          </a>
        </li>
        <li class="nav-item">
          <a routerLink="/pharmacy" class="nav-link"  style="color: #ffffff;">
            About Us
          </a>
        </li>
        <li class="nav-item">
          <a routerLink="/laboratory" class="nav-link" style="color: #ffffff;">
            Contact Us
          </a>
        </li>
      </ul>
    </div>
  </nav>
<?php
include("connection.php");

if(isset($_POST['submit'])) {
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$dob = $_POST['dob'];
	$preference = $_POST['preference'];
	$pass = $_POST['pass'];
	$cpass = $_POST['cpass'];
	mysqli_query($mysqli, "INSERT INTO users(fname,lname,phone, email, dob, preference,password) VALUES('$fname','$lname','$phone','$email', '$dob', '$preference', '$pass')")
			or die("Could not execute the insert query.");	
	echo '<script language="javascript">';
	echo 'alert("Registration Successful!! ")';
	echo '</script>';
} else {
?>
<form name="form1" method="post" action="">
  <div class="form-row">
    <div class="form-group col-md-6 ">
      <label>Fisrt Name</label>
      <input type="text" class="form-control" name="fname" placeholder="Fisrt Name" required>
    </div>
	<div class="form-group col-md-6">
      <label>Last Name</label>
      <input type="text" class="form-control" name="lname" placeholder="Last Name" required>
    </div>
  <div class="form-group col-md-6">
    <label>Phone Number</label>
    <input type="number" class="form-control" name="phone" placeholder="Phone Number" onblur="phonenumber()" required>
  </div>
  <div class="form-group col-md-6">
    <label>Email</label>
    <input type="email" class="form-control" name="email" placeholder="Email" required>
  </div>
  <div class="form-group col-md-6">
    <label>Date Of Birth</label>
    <input type="text" class="form-control" id="datepicker" name="dob" placeholder="Date Of Birth" required>
  </div>
  <div class="form-group col-md-6">
      <label>Article Preference</label>
      <select class="form-control" name="preference" required>
	  <option >Select Article Preference</option>
  <option value="Art">Art</option>
  <option value="Craft">Craft</option>
  <option value="Music">Music</option>
  <option value="Sports">Sports</option>
</select>
    </div>
    <div class="form-group col-md-6">
      <label>Password</label>
      <input type="password" class="form-control" name="pass" placeholder="Password" required>
    </div>
	<div class="form-group col-md-6">
      <label>Confirm Password</label>
      <input type="password" class="form-control" name="cpass" placeholder="Confirm Password" onblur="checkpass()" required>
    </div>
  </div>
  <input type="submit" name="submit" class="btn btn-primary" value="Register">
  </form>
<?php
}
?>
</body>
</html>
