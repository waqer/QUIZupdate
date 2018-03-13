
<?php include('student_dashboard_code.php');?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
	<h1 align="center">Welcome to LOGIN Page</h1>
</head>
<body>

    <a href="registration.php"> Sign Up as new user?</a>
	<br>
	<br>
	<br>

    <form method="post" action="login.php"  >
        Id:
        <input type="text" name="id"></br>
        Password:
        <input type="text" name="password"></br>
 
        <input type="radio" name="type1" value="student"> Student<br>
        <input type="radio" name="type1" value="teacher"> Teacher<br>        
        <button type='submit' name='submit'>Log In</button> 

    </form>
    
</body>
</html>