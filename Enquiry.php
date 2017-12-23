<?php 
$msg='';
if(isset($_POST["Submit"]))
{
$name=$_REQUEST["name"];
$c_name=$_REQUEST["company"];

$email=$_REQUEST["email"];
$phone=$_REQUEST["phone"];

$msg .="Quick Enquiry<br>";  
   
		   $msg .="<b>Name</b>------------------" . $name. "<br>";
		  $msg .="<b>Company Name</b>----------------" .$c_name . "<br>";
	
			$msg .="<b>Email</b>-------------------------" .$email. "<br>";
			$msg .="<b>Mobile</b>----------------" . $phone . "<br>";	
					
		   
				 $sub="Enquiry";
	         $from=$email;
			
	         $to="santtoshmaurya999@gmail.com";
  
	          
 $headers  = 'MIME-Version: 1.0' . "\r\n";
               $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
               $headers .= 'From:'.$email . "\r\n" .
                     'Reply-To:' . "\r\n" .
                     'X-Mailer: PHP/'.phpversion();

					 if ( mail($to,$sub,$msg,$headers))
					 {
					 echo "<font color='red'>THANK YOU !!!<br />
<br />

</font>";
					 }
					 else
					 {
					
					echo "unable to sent mail";
					}
					 
	   
			

}
?>

<form method="post">
name <input type="text" name="name">
complany<input type="text" name="c_name">
email <input type="text" name="email">
phone <input type="text" name="phone">

<input type="submit" name="submit" value="submit">
</form>