<?php
session_start();
if (isset($_POST['Submit']))
 {
	$email=$_POST['email'];
	$password=$_POST['pswd'];

		$con=mysqli_connect("localhost","root","","reminder");
		$q="select * from signup where email='$email' and password='$password'  ";
		$qry=$con->query($q);
		if($qry->num_rows>0)
		{
			$_SESSION["loginssid"]=$email;
			echo "<script>alert('Login Successfull.....');</script>";
			echo "<script>window.location.href='index.php';</script>";
		}
		else
		{
			echo "<script>alert('Invalid Username or password.')</script>;";
			echo "<script>window.location.href='index.php';</script>";
		}
}
?>