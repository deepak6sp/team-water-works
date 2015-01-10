<?php
//sending email
$my_email = "teamwaterworks@hotmail.com, teamwaterworks@rediffmail.com";
$continue = "/";

// This line prevents values being entered in a URL
if ($_SERVER['REQUEST_METHOD'] != "POST"){exit;}

$message = "";
// This line prevents a blank form being sent

while(list($key,$value) = each($_POST)){if(!(empty($value))){$set=1;}$message = $message . "$key: $value\n\n";} if($set!==1){header("location: $_SERVER[HTTP_REFERER]");exit;}

$message = "Team Water Work Website Enquiry Form\n--------------------------\n\n" . $message . "---------------------- \n";
$message = stripslashes($message);

$subject = "Team Water Work Website Enquiry Form";
$headers = "From: " . $_POST['Email'] . "\n" . "Return-Path: " . $_POST['Email'] . "\n" . "Reply-To: " . $_POST['Email'] . "\n";

mail($my_email,$subject,$message,$headers);


?>

<script language="javascript" type="text/javascript"> 
	alert ("Thanks for your Message! \n\n Mail Successfully Sent!\n\n Redirecting to Home Page...");
	window.location.href='index.htm'; 
</script> 
