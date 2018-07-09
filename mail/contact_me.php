<?php
// check if fields passed are empty
if(empty($_POST['name'])  		||
   (empty($_POST['surname'])  	||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$surname = $_POST['surname'];   
$email_address = $_POST['email'];
$message = $_POST['message'];
	
// create email body and send it	
$to = 'asadmasroor3@gmail.com'; // hi mate thanks for purchase guna theme, just replace your email with emailme@myprogrammingblog.com
$email_subject = "Contact form submitted by:  $name";
$email_body = "You have received a new message. \n\n".
				  " Here are the details:\n \nName: $name $surname\n ".
				  "Email: $email_address\n Message \n $message";
$headers = "From: asadmasroor3@gmail.com\n";
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>