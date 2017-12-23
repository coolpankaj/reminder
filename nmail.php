<?php
session_start();
error_reporting(4);
if(isset($_SESSION['loginssid'])) {
	

							echo '<br><br><br>';							/*echo "<div class='jumbotron'>";
							echo "WHOAA.....You are logged in as &nbsp&nbsp&nbsp<strong>[".$_SESSION['loginssid']."]</strong>";
							echo "<br><br><a href='logout.php' class='btn btn-success'>Logout</a></div>";*/
							include('profile.php');
							echo "<hr>";
							

						}
	
else{
		echo "<script>alert('You must login first.');</script>";
		echo "<script>window.location.href='index.php';</script>";
	
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Mail | Notification</title>

	<!--------------------------Bootstrap 3 Linking----------------------------------------------------------->
<!-- Latest compiled and minified CSS -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<?php include('nav.php'); ?>
			<div class="row">
				<div class="col-md-offset-2 col-md-8" style="font-family: 'Risque', cursive;background-color:#cccccc;border-radius:5px;">
					<div class="col-md-10 col-md-offset-1">
					<h2 class="text text-primary text-center">Mail Notifications</h2><hr>
				 </div>
				 <div class=" col-md-10 col-md-offset-1" >

					<form method="post" action="mail.php" style="font-size:20px;">
						<div class="form-group">
							<label>Host email:</label>
							<input class="form-control" type="text" name="email" value="Reminder.com" readonly="readonly" />
						</div>
						
					<div class="form-group">
						<label>Subject:</label>
						<input class="form-control" type="text" name="sub" />						
					</div>
					<div class="form-group">
						<label>Body:</label>
						<textarea class="form-control" type="text" name="body" rows="8" cols="5"></textarea> 
					</div>
					<div class="form-group">
						<label>Remind Details:</label><br>
						<label class="text text-muted">Date:</label>
						<input type="date" class="form-control"  name="date" style="width:250px;" />
						<label class="text text-muted">Time:</label>
						<input type="number" min="1" max="24" name="hours" /1>
					</div>
						<button type="submit" class="btn btn-success btn-block" name="submit" value="submit">Set Reminder</button><br>
					</form>
				 </div>
</div>
			 </div>
			</div>
</body>
<?php include('footer.php'); ?>
</html>
