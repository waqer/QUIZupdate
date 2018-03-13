<?php
///--------------------------login check------------------------------------------------
    session_start();
	
    $filename="user.txt";
    $position="";
    if(isset($_POST['submit'])){
        $username=$_POST['id'];
        $password=$_POST['password'];
        if(isset($_POST['type1'])){
            $position=$_POST['type1'];
           // echo $position;
            }
        $usernameAndPassword=$username."\r\n".$password."\r\n".$position;
        $documents=file_get_contents($filename);
        //echo $documents;
		if ( preg_match("~\b$usernameAndPassword\b~",$documents)) {
			//echo "matched";
            $_SESSION['id']=$username;
			$_SESSION['password']=$password;
           // echo $_SESSION['id'];
            $_SESSION['position']=$position;
            if($position=='student'){
                
            header('location: student_dashboard.php');
            }
            if($position=='teacher'){
                
                header('location: teacher_dashboard.php');
                }

		}
		  
		else{
			echo "Wrong User name or Password";
		}
    }

?>