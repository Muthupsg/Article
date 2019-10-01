<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>

<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("connection.php");

if(isset($_POST['Submit'])) {	
	$genere = $_POST['genere'];
	$title = $_POST['title'];
	$content = $_POST['content'];
	$image = addslashes(file_get_contents($_FILES["file"]["tmp_name"]));
	$loginId = $_SESSION['id'];
		
	// checking empty fields
	if(!isset($image))
    {
      echo 'Please select an Image';
    }
	else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO articles(genere, title, content, image, login_id) VALUES('$genere','$title','$content','$image','$loginId')");
		
		//display success message
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='view.php'>View Result</a>";
	}
}
?>
</body>
</html>
