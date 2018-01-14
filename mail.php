<?php 
session_start();
error_reporting(4);
$msg='';
if(isset($_POST["submit"]))
{

$r_mail=$_POST["r_mail"];
$subject=$_POST["sub"];
$body=$_POST["body"];
$date2=$_POST["date"];
$hour=$_POST["hr"];
$min=$_POST["min"];
function gap($date2)
		 {
		 	$time = new DateTime("$date");
            $date1 = $time->format('Y-n-j');
            echo $date1."<br>";
            echo $date2."<br>";
		 //$date1 = "2007-03-24";
         //$date2 = "2009-06-26";

         $diff = abs(strtotime($date2) - strtotime($date1));
         echo $diff;
			$years = floor($diff / (365*60*60*24));
			$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
			$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

			printf("%d years, %d months, %d days\n", $years, $months, $days);
		}
		echo gap("$date2");
//  $time = new DateTime("$date");
//  $date = $time->format('n-j-Y');
//  $diff=explode('-', $date);
//  $days=$diff[0];
//   $months=$diff[1];
//   $year=$diff[2];
//   echo "year".$year."<br>";
//   echo "months".$months."<br>";
//   echo "days".$days."<br>";

// echo "rmail".$r_mail."<br>";
// echo "subject".$subject."<br>";
// echo "body".$body."<br>";
// echo "date".$adate."<br>";
// echo "hour".$hour."<br>";
// echo "min".$min."<br>";



		
 
 }
?>
<!-- 
// $msg .="Reminder<br>";  
   
		  
// 		  $msg .="<b>Subject:</b>  " .$subject . "<br>";
	
// 			 $msg .="<b>Body:</b>  " .$body . "<br>";
	
			
					   
// 				 $sub="Reminder";
// 	         $from=$email;
			
// 	         $to=$r_mail;
  
	          
//  $headers  = 'MIME-Version: 1.0' . "\r\n";
//                $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
//                $headers .= 'From:'.$email . "\r\n" .
//                      'Reply-To:' . "\r\n" .
//                      'X-Mailer: PHP/'.phpversion();

					//   if ( mail($to,$sub,$msg,$headers))
					//  {
					//  echo "<script>alert('Reminder set successfully.');</script>";
					//  echo "<script>window.location.href='nmail.php'</script>";
					//  #echo print($_SESSION['loginssid']);
					//  }
					//  else
					//  {
					
					// echo "<script>alert('Unable to set reminder.');</script>";
					// }
					 
	   
			

// } -->


