<?php include('student_dashboard_code.php');?>

<?php 

  if (!isset($_SESSION['position'])) {
  
  	header('location: login.php');
  }  
?>


<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
    <h1 align="center">Welcome to Question Page</h1>
</head>
<body>

<?php	

		$myfile = fopen("quiz.txt", "r");
		echo fread($myfile,filesize("quiz.txt"));
		fclose($myfile);
?>
</body>
</html>