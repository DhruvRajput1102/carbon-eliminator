<?php
$user=$_POST['username'];
$pass=$_POST['password'];
error_reporting(E_ALL ^ E_DEPRECATED);$con=mysqli_connect("localhost","root","","carbon_eliminator");
$query="SELECT * FROM a_login WHERE a_id='".$user."' and a_pwd='".$pass."'";
$result=mysqli_query($con,$query);
	//$result=mysql_query($query);
	$count=mysqli_num_rows($result);
	print_r($count);
		if($count!=0)
		{
	
			session_start();
			$_SESSION['username']=$user;
			$_SESSION['password']=$pass;
			$_SESSION['last_login_timestamp'] = time();
			header("location:session1.php");
		}
		else
		{
			echo '<script type="text/javascript">alert("Wrong Username & Password");window.location=\'index.php\';</script>';
		}

?>