<!DOCTYPE html>
<html>
<head>
   
    <title>registration</title>
	<h1 align="center">Welcome to Registration Page</h1>
    
</head>
<body>
    <form action="registration.php" method="POST" >

        Id:
        <input type="text" name="id"></br>
        First Name:
        <input type="text" name="firstname"></br>
        Last Name: 
        <input type="text" name="lastname"></br>
        Email:
        <input type="text" name="email"></br>
        Password:
        <input type="text" name="password1"></br>
        Retype Password:
        <input type="text" name="password2"></br>
        
		
		<input type="radio" name="type1" value="student"> Student<br>
        <input type="radio" name="type1" value="teacher"> Teacher<br>        
        
		<input type="submit" name="submit" value="Submit">
	<br><br>
		
	<a href="login.php"> Want To Login?</a>
    </form>  
	</body>
	
<?php
    $position="";
    $error=0;	
    if(isset($_POST['submit'])){
        $sid=$_POST['id'];
        $fname=$_POST['firstname'];
        $lname=$_POST['lastname'];
        $email=$_POST['email'];
        $password1=$_POST['password1'];
        $password2=$_POST['password2'];
		
        if(isset($_POST['type1'])){
        $position=$_POST['type1'];
        //echo $position;
        }
        

        if(empty($sid)){
            echo '*Student Id is required'.'<br>';
            $error++;
        }
        if(empty($fname)){
            echo '* Firstname is required'.'<br>';
            $error++;
        }

        if(empty($lname)){
            echo '* lastname is required'.'<br>';
            $error++;
        }

        if(empty($email)){
            echo '* Email is required'.'<br>';
            $error++;
        }

        if($password1 != $password2){
            echo '* password didn\'t match'.'<br>';
            $error++;
        }


        $filename="user.txt";
        if($error==0){
        $usernameAndPassword=$fname."\r\n".$lname."\r\n".$email."\r\n".$sid."\r\n".$password1."\r\n".$position."\r\n";
        $openfile=fopen($filename,'a');
        fwrite($openfile,$usernameAndPassword);
        fclose($openfile);
        }
    }
?>

</html>