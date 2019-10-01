<?php session_start(); ?>
<html>
<head>
	<title>Login</title>
	<!-- BOOTSTRAP 4 -->
    <link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.min.css">
    <!-- FONT AWESOEM -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>

<body>
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
          <a href='register.php' class="nav-link" style="color: #ffffff;">
            Registration
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
	$user = mysqli_real_escape_string($mysqli, $_POST['email']);
	$pass = mysqli_real_escape_string($mysqli, $_POST['password']);
	$result = mysqli_query($mysqli, "SELECT * FROM users WHERE email='$user' AND password='$pass'")
					or die("Could not execute the select query.");
	$row = mysqli_fetch_assoc($result);
		if(is_array($row) && !empty($row)) {
			$validuser = $row['email'];
			$_SESSION['valid'] = $validuser;
			$_SESSION['fname'] = $row['fname'];
			$_SESSION['id'] = $row['id'];
			if(isset($_SESSION['valid'])) {
			header('Location: dashboard.php');			
		}
		} 
		else {
			echo "Invalid Email or password.";
			echo "<br/>";
			echo "<a href='login.php'>Go back</a>";
		}

		
	}
else {
?>
	<p><font size="+2">Login</font></p>
	<form name="form1" method="post" action="">
		<table width="75%" border="0">
			<tr> 
				<td width="10%">Email</td>
				<td><input type="email" name="email"></td>
			</tr>
			<tr> 
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr> 
				<td>&nbsp;</td>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
		</table>
	</form>
<?php
}
?>
</body>
</html>
