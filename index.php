<?php
session_start();
error_reporting(4); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Reminder | Home</title>
		<meta charset="utf-8">
		<meta name="theme-color" content="blue">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel=”manifest" href="/manifest.json">
	<!--------------------------Bootstrap 3 Linking----------------------------------------------------------->
<!-- Latest compiled and minified CSS -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!----------------------------------------------------------------------------------------------------------
<link rel="stylesheet" type="text/js" href="bootstrap/js/bootstrap.min.js">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">-->

</head>
<?php include('nav.php'); ?>
<!--
<a name="linktotop"></a>
<body class="container-fluid" style="background-image: url(images/background.jpg);background-attachment: fixed;">
		<nav class="navbar navbar-inverse navbar-fixed-top" >
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynav">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
						<a class="navbar-brand" href="index.php" >REMINDER
						</a>
				</div>

					<div class="collapse navbar-collapse" id="mynav">
						<ul class="nav navbar-nav navbar-right">
							<li class="active"><a href="#" >Home</a></li>
							<li><a href="#services" >Services</a></li>
							<li><a href="#contact" >Contact Us</a></li>
							
						</ul>
					</div>	
			</div>
		</nav>

	<br><br><br><br>-->


				<div class="jumbotron" style="background-image: url(images/new.jpg);background-size: cover;height:400px;width: 100%;background-position: center;position: relative;">
					
					<!--<img class="img-responsive img-thumbnail center-block" src="images/new.jpg" alt="header" style="width: 100%;height: 500px;" >
					
							<h1 style="color:#33331a;font-family: cursive;line-height: 600px;">Reminders - all over the world.</h1>
							<p>Never miss your important updates. </p>-->
							
						</div>
				
				<br><br>
				

				<!------------------------------Sign-Up Form-------------------------------------------->
				<!--<style type="text/css">
					input{display:hidden;}
					input:invalid {  border: 2px dashed red;}
					input:valid {  border: 2px solid green;}
					input[type="radio"]:invalid{ border: 2px dashed red;}
					input[type="radio"]:valid{ border: 2px solid green;}
						
				</style>-->

				<?php		 session_start();
							error_reporting(4);
						if (isset($_SESSION['loginssid']) )
						{
							/*echo "<div class='jumbotron'>";
							echo "WHOAA.....You are logged in as &nbsp&nbsp&nbsp<strong>[".$_SESSION['loginssid']."]</strong>";
							echo "<br><br><a href='logout.php' class='btn btn-success'>Logout</a></div>";*/
							include('profile.php');
						}
				else{

?>
				<div class="row">
					<div class="col-md-4 col-md-offset-1 " style="color: white;"  >
							<form name="signup" method="post" action="signup.php"  onsubmit="return validatesignup();" >
								<fieldset><legend style="color: white;">Sign Up </legend></fieldset>

								<div class="form-group">
									<label for="email" >Email</label>
									<input type="email" name="email" class="form-control" placeholder="Enter email" >
								</div>
								<div class="form-group">
									<label for="pswd">Password <span style="color: #ff0000">[ It's Final ]</span></label>
									<input type="Password" name="pswd" class="form-control" placeholder="Enter password" >	
								</div>
						<div class="btn-group" data-toggle="buttons">
							<label class="form-group">Gender</label><br>
                         <label class="btn btn-primary"><input type="radio" name="gender" value="male" /> Male</label>
                            <label class="btn btn-primary ">
                                <input type="radio" name="gender" value="female" /> Female
                            </label>
                                <label class="btn btn-primary">
                                    <input type="radio" name="gender" value="other"  /> Other
                                </label>
                        </div>
								<div class="form-group">
									<br><label>Mobile</label>
									<input type="number" class="form-control" name="mob" placeholder="Enter mobile number"  />
									
								</div>
								<div class="checkbox">
									<label><input type="checkbox" checked >Remember me</label>
								</div>
								<button type="Submit" value="Submit" name="Submit" class="btn btn-info btn-block"  >Submit</button>
							</form>
						
					</div>
					<!------------------------------End of Sign-Up Form---------------------------------->

					<!-------------------------------Log-In Form------------------------------------------>
							<div class="col-md-4 col-md-offset-2" >
							<form name="login" method="post" action="login.php " onsubmit="return validatelogin();" >
								<fieldset><legend style="color: white;">Log In </legend></fieldset>
								<div class="form-group">
									<label for="email" style="color: white;">Email</label>
									<input type="email" name="email" class="form-control" placeholder="Enter email" >
								</div>
								<div class="form-group">
									<label for="pswd"  style="color: white;">Password</label>
									<input type="Password" name="pswd" class="form-control" placeholder="Enter password" >	
								</div>
								
								<div class="checkbox">
									<label  style="color: white;"><input type="checkbox" checked >Remember me</label>
								</div>
								<button type="Submit" value="Submit" name="Submit" class="btn btn-success btn-block" >Submit</button>
							</form>
						
					</div></div><br><br><hr style="height:1px;background-color:white;border-radius:1000%;"  >



					<!----------------------------------  javascript validation-------------------------------->
					<script type="text/javascript" src="js/validation.js" ></script>
			<?php	} ?>
				<!------------------------------------------End Of Log-In Form------------------------------------>

				<section class="jumbotron" style="background-color:#ccccff;" id="services">
					<div class="row">
						<div class="col-md-6">
							<img  src="images/email.png" style="margin: 0 auto;" >
						</div>

					<div class="col-sm-6" >
                	<h2 class="section-header">Notification Through Mail </h2>
                	<p class="lead text-muted">By using this feature, You will get an alert via e-mail.This feature is completely free for all type of users.You must have proper internet connection to use this feature.<br><strong>HURRAY !!!</strong>There is no need of mobile number.  </p>
                	<a href="nmail.php" class="btn btn-primary btn-lg">Grab Now</a>
                </div>            
					</div>
				</section>

				<section class="jumbotron" style="background-color:#ccccff;">
					<div class="row">
						<div class="col-md-6">
							<img  src="images/msg2.png" style="margin: 0 auto;" >
						</div>

			     	 <div class="col-sm-6">
                	<h2 class="section-header">Updates via Messages</h2>
                	<p class="lead text-light">This feature does not require any <strong>INTERNET CONNECTION</strong>.You just register with a valid Mobile number, and you will get notifications in your hand.<br><strong>WHOAA !!</strong>Supports all types of mobile numbers(Only India).</p>
                	<a href="#" class="btn btn-primary btn-lg">Grab Now</a>
                </div>    
					
				</section>

				<section class="container-fluid" style="border-radius:5px;background-color:rgb(154,205,50);" >
					<h1 class="section-header" style="text-align: center;color: white;"><span class="glyphicon glyphicon-pushpin"></span><br> Key Features</h1>
					
					<hr style="height:2px;background-color:#9999ff;width: 80%;text-align: center;border-radius: 50%;">
					<div class="col-md-8 col-md-offset-2">
					<p class="lead text-info"><strong> FAST  :</strong>&nbsp;&nbsp;&nbsp;All notifications will be pushed through internet in both plans.<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;It depends on your internet connection and mobile range.
            <br><br>
            <strong>RELIABLE  :</strong>&nbsp;&nbsp;You can get all your updates anytime anywhere in this country.<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;It does not stick with a particular type of mobile network.
             <br><br>
            <strong>PROTECTED  :</strong>All data will be encrypted  in terms of security and privacy.<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;You will be safe from any type of cyber attacks.</p> </div>
				</section>


				<!-- Footer -->

				<?php include('footer.php'); ?>

   <!-- <footer>
    
    	
        <br><br>
        	<div class="container-fluid" style="background-color:#00cca3;border-radius: 5px;color: white;" id="contact" ><br><br>
        		<div class="row" >
        			<div class="col-md-6 col-md-offset-3 text-center" style="word-wrap: break-word;word-spacing: 10px;font-size:30px;">
				<h2>Contact Us</h2><br>
				<p><span class="glyphicon glyphicon-earphone" ></span></p>
				<p>(+91)8427678575</p><br>
				<p><span class="glyphicon glyphicon-envelope"></span></p>
				<p> pankajsaini982134@gmail.com</p>

                <a href="#linktotop" style="color: black;text-decoration: none;font-size:15px;">Back To Top</a>
        	</div>
          </div>
        </div>
        </footer>
        	
        
       
        	<div class="container-fluid">
        		<div class="row">
        			<div class="col-md-12 text-center">
        		<br><p style="color:blue;font-size: 20px;">Copyright &copy; Designed By <strong> Pankaj Saini</strong> with <span style="color: red;font-size: 20px;">&#10084;</span>. 2017</p>
        			

        	  	</div>
        	</div>
        </div>
        
    

				
				
</html>
