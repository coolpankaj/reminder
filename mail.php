<?php 
session_start();
error_reporting(4);
$msg='';
if(isset($_POST["submit"]))
{


$subject=$_POST["sub"];
$body=$_POST["body"];



$msg .="Reminder<br>";  
   
		  
		  $msg .="<b>Subject:</b>  " .$subject . "<br>";
	
			 $msg .="<b>Body:</b>  " .$body . "<br>";
	
			
					   
				 $sub="Reminder";
	         $from=$email;
			
	         $to="pankajsaini982134@gmail.com";
  
	          
 $headers  = 'MIME-Version: 1.0' . "\r\n";
               $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
               $headers .= 'From:'.$email . "\r\n" .
                     'Reply-To:' . "\r\n" .
                     'X-Mailer: PHP/'.phpversion();

					 if ( mail($to,$sub,$msg,$headers))
					 {
					 echo "<script>alert('Reminder set successfully.');</script>";
					 echo "<script>window.location.href='nmail.php'</script>";
					 #echo print($_SESSION['loginssid']);
					 }
					 else
					 {
					
					echo "<script>alert('Unable to set reminder.');</script>";
					}
					 
	   
			

}
?>

