<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
    <h1 align="center">Welcome to Question Page</h1>
</head>
<body>



	<form action="login.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
	<br><br>
	Name:
	<input type="text" name="name"> </br>
	<input type="submit" name="submit" value="Write to file"></br>
	</form>

<?php	

		//$myfile = fopen("h.txt", "x");
		//fclose($myfile);
		
	$myfile = fopen("quiz.txt", "w");
	$txt = "8+5=?";
	fwrite($myfile, $txt);
	fclose($myfile);
	
	
?>
</body>
</html>