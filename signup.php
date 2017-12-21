<?php
if (isset($_POST['Submit']))
 {
	$email=$_POST['email'];
	$password=$_POST['pswd'];
	$gender=$_POST['gender'];
	$mobile=$_POST['mob'];
	

	$con=mysqli_connect("localhost","root","","reminder");

	$q1="select * from signup where email='$email' ";
	$qry1=$con->query($q1);
	if ($qry1->num_rows>0)
	 {
		echo "<script>alert('email already registered....');</script>";
		echo "<script>window.location.href='index.php' ;</script> ";
		
	}
	else{
	$q="insert into signup values ('','$email','$password','$gender','$mobile')";
	$qry=$con->query($q);
	if($qry==TRUE)
	{
		echo "<script>alert('Sign Up Successfull........');</script>";
		echo "<script>window.location.href='index.php' ;</script> ";
	}
	else
	{
		echo "<script>alert('Something went wrong........');</script>";
		echo "<script>window.location.href='index.php' ;</script> ";
	}
}
}



?>