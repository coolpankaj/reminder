<?php
if (isset($_POST['submit']))
 {
	$user=$_POST['user'];
	$pass=$_POST['pass'];
	$gen=$_POST['gender'];
	$email=$_POST['email'];
	$mob=$_POST['mob'];
	$city=$_POST['city'];
	$pin=$_POST['pin'];


	$con=mysqli_connect("localhost","root","","reminder");
	$q="insert into signup values ('','$user','$pass','$gen','$email','$mob','$city','$pin')";
	$qry=$con->query($q);
	if($qry==TRUE)
	{
		echo "<script>alert('Sign Up Successfull........');</script>";
		echo "<script>window.location.href='index.html' ;</script> ";
	}
	else
	{
		echo "<script>alert('Something went wrong........');</script>";
	}
}



?>