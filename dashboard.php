<?php session_start(); ?>
<html>
<head>
<title>User Dashboard</title>
<!-- BOOTSTRAP 4 -->
    <link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.min.css">
    <!-- FONT AWESOEM -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">
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
          <a class="nav-link" style="color: #ffffff;"><?php echo $_SESSION['fname'];
		  ?></a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href='view.php'  style="color: #ffffff;">
            Articles
          </a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href='logout.php' style="color: #ffffff;">Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="d-flex" id="wrapper">
  <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="list-group list-group-flush">
		<a href="index.php" class="list-group-item list-group-item-action bg-light">Home</a>
        <a href="add.html" class="list-group-item list-group-item-action bg-light">Add Articles</a>
        <a href="view.php" class="list-group-item list-group-item-action bg-light">View Articles</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Profile</a>
      </div>
    </div>
	</div>
<?php
	if(isset($_SESSION['valid'])) {			
		include("connection.php");					
		$result = mysqli_query($mysqli, "SELECT * FROM users");
	?>
	<?php	
	}
	?>
	</body>	
	</html>