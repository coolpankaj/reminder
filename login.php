<?php
session_start();
if (isset($_POST['submit']))
 {
	$user=$_POST['l_user'];
	$pass=$_POST['l_pass'];

		$con=mysqli_connect("localhost","root","","reminder");
		$q="select * from signup where username='$user' and password='$pass'  ";
		$qry=$con->query($q);
		if($qry->num_rows>0)
		{
			$_SESSION["phpssid"]=$user;
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