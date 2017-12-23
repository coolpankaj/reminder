

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
				 <div class="col-md-10 col-md-offset-1" >
					<form style="font-size:20px;">
						<div class="form-group">
							<label>Your email:</label>
							<input class="form-control" type="email" name="s_nmail" value="aaa" readonly="readonly">
						</div>
					<div class="form-group">
						<label>Receiver's email:</label>
						<input class="form-control" type="email" name="r_email" />
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
						<label>Remind Time:</label>
						<input class="form-control" type="time" name="time" />
					</div>
						<button type="button" class="btn btn-success btn-block" name="submit" value="submit">Send</button><br>
					</form>
				 </div>

			 </div>
			</div>
</body>
<?php include('footer.php'); ?>
</html>
