				<?php		 session_start();
							error_reporting(4);
						if (isset($_SESSION['loginssid']) )
						{
							echo "<div class='jumbotron'>";
							echo "WHOAA.....You are logged in as &nbsp&nbsp&nbsp<strong>[".$_SESSION['loginssid']."]</strong>";
							echo "<br><br><a href='logout.php' class='btn btn-success'>Logout</a></div>";
						}
				else{
include('index.php');
}
?>