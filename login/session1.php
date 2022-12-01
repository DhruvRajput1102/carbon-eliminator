<?php
session_start();
if(isset($_SESSION['username']))
{
	if(isset($_SESSION['password']))
	{
		header("location:../inner-page.php");
	}
}
else
{
	echo '<script type="text/javascript">alert("Wrong Username & Password");window.location=\'index.php\';</script>';
}
?>