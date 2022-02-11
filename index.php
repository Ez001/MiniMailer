<?php 
 	#   Author of the script
   #   Name: Ezra Adamu
   #   Email : ezra00100@gmail.com
   #   Date created: 10/01/2022
   #   Date modified: 09/02/2022  
	include_once('Mailer.php');

   $mailer = new Mailer;
   $msg = '';
   //send mail
   if (function_exists('mail')) {
      $email = 'abc@gmail.com';
      $pword = uniqid();
      $msg = $send_mail = $mailer->sendMail($email, $pword);
   }else{
      $msg = '<h5 class="">Failed to connect to mailserver!</h5>';
   }

   echo $msg;
 ?>