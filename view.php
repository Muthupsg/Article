<?php session_start(); ?>
<html>
<head>
	<title>Homepage</title>
</head>

<body>
	<a href="index.php">Home</a> | <a href="add.html">Add New Data</a> | <a href="logout.php">Logout</a>
<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
	
}
header('Content-type: image/jpeg');
?>

<?php
//including the database connection file
include_once("connection.php");
//fetching data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM articles WHERE login_id=".$_SESSION['id']." ORDER BY id DESC");
if (mysqli_num_rows($result) == 0) die("There is no image.");
//  Retrieve image

	$row     = mysqli_fetch_array($result);	 
	$content = $row['image'];
//	Display image
	echo $content;
?>
</body>
</html>
