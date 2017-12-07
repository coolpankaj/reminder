<?php error_reporting(4); ?>
<!DOCTYPE html>
<!-- Template by Quackit.com -->
<!-- Images by various sources under the Creative Commons CC0 license and/or the Creative Commons Zero license. 
Although you can use them, for a more unique website, replace these images with your own. -->
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Reminder</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS: You can use this stylesheet to override any Bootstrap styles and/or apply your own styles -->
    <link href="css/custom.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom Fonts from Google -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    
</head>

<body>
<?php session_start(); ?>
<a name="linktotop"></a>
    <!-- Navigation -->
    <nav id="siteNav" class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Logo and responsive toggle -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                	<span class="glyphicon glyphicon-fire" style="color: red;"></span> 
                	REMINDER
                </a>
            </div>
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active">
                        <a href="#">Home</a>
                    </li>
                   
					<li>
                        <a href="#services">Services</a>               
                    </li>
                    <li>
                        <a href="#contact">Contact</a>
                    </li>
                </ul>
                
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav>

	<!-- Header -->
    <header style="background-attachment:fixed;">
        <div class="header-content">
            <div class="header-content-inner">
                <h1 style="font-size:70px;">NOW !!&nbsp;FEEL FREE TO MOVE</h1>
                <p style="word-spacing: 5px;">Get Your IMPORTANT UPDATES In Your Hand...Anytime  Anywhere.</p>
                <?php
                if (isset($_SESSION['phpssid'])) 
                {?>
                   
                     <a href="logout.php" class="btn btn-primary btn-lg ">Logout </a>
                    
               <?php }

                    else{?>

                                <a href="#" class="btn btn-primary btn-lg " data-toggle="modal" data-target="#signup"  >Sign Up </a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" class="btn btn-primary btn-lg " data-toggle="modal" data-target="#login">Login </a>
                           <?php }
                ?>
            </div>
        </div>
    </header>
    <div class="modal fade" id="signup">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <div class="modal-title">Sign Up Form</div>
                </div>
                <div class="modal-body">
                    <form method="post" action="signup.php">
                        <div class="input-group">
                            <input type="text" name="user" class="form-control" placeholder="Username" required="required"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        </div><br>
                         <div class="input-group">
                            <input type="password" name="pass" class="form-control" placeholder="Password" required="required"><span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        </div><br>
                        <h5 style="font-weight: bold;text-shadow: none;">Gender</h5>
                       <div class="btn-group" data-toggle="buttons">

                         <label class="btn btn-default">

                           <input type="radio" name="gender" value="male" required="required"/> Male
                         </label>
                            <label class="btn btn-default">
                                <input type="radio" name="gender" value="female" required="required"/> Female
                            </label>
                                <label class="btn btn-default">
                                    <input type="radio" name="gender" value="other" required="required"/> Other
                                </label>
                        </div><br><br>
                        <div class="input-group">
                            <input type="email" name="email" class="form-control" placeholder="Email" required="required"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                        </div><br>
                        <div class="input-group">
                            <input type="number" name="mob" class="form-control" placeholder="Mobile Number" required="required"><span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                        </div><br>
                         <h5 style="font-weight: bold;text-shadow: none;">City</h5>
                       <!-- <div class="dropdown">
                           <button class="bt btn-success dropdown-toggle" data-toggle="dropdown" style="padding: 5px;background-color: lightblue;border-radius: 5px;box-shadow: none;">Select City<span class="caret"></span></button>
                           <ul class="dropdown-menu">
                               <li>New Delhi</li>
                               <li>New Delhi</li>
                               <li>New Delhi</li>
                               <li>New Delhi</li>
                               <li>New Delhi</li>
                           </ul>
                        </div>-->
                        <select name="city" required="required" style="padding: 5px;box-sizing: border-box;box box-shadow: none;font-size: 10pt;background-color:#DCC1D7;border-radius: 5px;">
                            <option>New Delhi</option>
                            <option>Delhi-NCR</option>
                            <option>Gurugram</option>
                            <option>Noida</option>
                        </select>
                        <br><br>
                        <div class="input-group">
                            <input type="number" name="pin" class="form-control" required="required"><span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
                        </div>
                       
                        <div class="modal-footer " >
                            <button  type="submit" name="submit" style="width: 100%;background-color:#00afb8;text-align: center;border-radius: 10px;padding: 5px;font-weight: bold;font-size:15pt;border: none;" >Sign Up</button>
                        </div>
                    </form>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="login" >
                        <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <div class="modal-title">Login Form</div>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="login.php">
                                    <div class="input-group">
                                        <input type="text" name="l_user" class="form-control" placeholder="Username" required="required"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    </div><br>
                                    <div class="input-group">
                                        <input type="password" name="l_pass" class="form-control" placeholder="Password" required="required"><span class="input-group-addon"><i class=" glyphicon glyphicon-lock"></i></span>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" name="submit" style="width: 100%;background-color:#c92626;text-align: center;border-radius: 10px;padding: 5px;font-weight: bold;font-size:15pt;border: none;">Login</button>
                                    </div>
                                </form>
                            </div>
                            </div>
                        </div>
                    </div>

	<!-- Intro Section -->
  <!--  <section class="intro">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                	<span class="glyphicon glyphicon-apple" style="font-size: 60px"></span>
                    <h2 class="section-heading">Completely synergize resource taxing relationships</h2>
                    <p class="text-light">Professionally cultivate one-to-one customer service with robust ideas. Dynamically innovate resource-leveling customer service for state of the art customer service.</p>
                </div>
            </div>
        </div>
    </section>-->

	<!-- Content 1 -->
    <section class="content" id="services">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <img class="img-responsive img-circle center-block" src="images/email.png" alt="">
                </div>
                <div class="col-sm-6" >
                	<h2 class="section-header">Notification Through Mail </h2>
                	<p class="lead text-muted">By using this feature, You will get an alert via e-mail.This feature is completely free for all type of users.You must have proper internet connection to use this feature.<br><strong>HURRAY !!!</strong>There is no need of mobile number.  </p>
                	<a href="#" class="btn btn-primary btn-lg" >Grab Now</a>
                </div>                
                
            </div>
        </div>
    </section>

	<!-- Content 2 -->
     <section class="content content-2">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                	<h2 class="section-header">Updates via Messages</h2>
                	<p class="lead text-light">This feature does not require any <strong>INTERNET CONNECTION</strong>.You just register with a valid Mobile number, and you will get notifications in your hand.<br><strong>WHOAA !!</strong>Supports all types of mobile numbers(Only India).</p>
                	<a href="#" class="btn btn-default btn-lg">Grab Now</a>
                </div>    
                <div class="col-sm-6">
              
                    <img class="img-responsive img-circle center-block" src="images/msg2.png" alt="" height="10px;">
                </div>            
                
            </div>
        </div>
    </section>    

    <!-- Promos -->
	<div class="container-fluid">
        <div class="row promo">
        	<a href="#">
				<div class="col-md-4 promo-item item-1">
					<h3>
						fast
					</h3>
				</div>
            </a>
            <a href="#">
				<div class="col-md-4 promo-item item-2">
					<h3>
						Reliable
					</h3>
				</div>
            </a>
			
			<a href="#">
				<div class="col-md-4 promo-item item-3">
					<h3>
						Protected
					</h3>
				</div>
            </a>
        </div>
    </div><!-- /.container-fluid -->

	<!-- Content 3 -->
     <section class="content content-3">
        <div class="container">
			<h2 class="section-header"><span class="glyphicon glyphicon-pushpin text-primary"></span><br>Key Features</h2>
            <hr align="center" style="width: 50%;height: 5px;border-radius: 10px;background-color: black;">
			<p class="lead text-muted"><strong> FAST  :</strong>&nbsp;&nbsp;&nbsp;All notifications will be pushed through internet in both plans.<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;It depends on your internet connection and mobile range.
            <br><br>
            <strong>RELIABLE  :</strong>You can get all your updates anytime anywhere in this country.<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;It does not stick with a particular type of mobile network.
             <br><br>
            <strong>PROTECTED  :</strong>All data will be encrypted in terms of security and privacy.<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;You will be safe from any type of cyber attacks.</p> 
                                
            </div>
        </div>
    </section>
    
	<!-- Footer -->
    <footer class="page-footer">
    
    	<!-- Contact Us -->
        <div class="contact">
        	<div class="container" id="contact">
				<h2 class="section-heading">Contact Us</h2>
				<p><span class="glyphicon glyphicon-earphone"></span><br>(+91) 8427678575</p>
				<p><span class="glyphicon glyphicon-envelope"></span><br> pankajsaini982134@gmail.com</p>

                <a href="#linktotop" style="color: black;text-decoration: none;">Back To Top</a>
        	</div>
        </div>
        	
        <!-- Copyright etc -->
        <div class="small-print">
        	<div class="container">
        		<p>Copyright &copy; Designed By <strong> Pankaj Saini</strong> with <span style="color: red;font-size: 20px;">&#10084;</span>. 2017</p>
        	</div>
        </div>
        
        <div style="font-size: 15pt;">

              Visited Users:<a href="http://www.hitwebcounter.com" target="_blank">
               <img src="http://hitwebcounter.com/counter/counter.php?page=6743095&style=0025&nbdigits=5&type=page&initCount=0" title="." Alt="."   border="0" ></a> <br/> <hr style="width: 20%;margin: auto;height: 3px;background-color:red;border-radius: 5px;"><br>
              </div>                   
                           
        
    </footer>

    <!-- jQuery -->
    <script src="js/jquery-1.11.3.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    
    <!-- Custom Javascript -->
    <script src="js/custom.js"></script>

</body>

</html>
