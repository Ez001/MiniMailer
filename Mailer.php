<?php
   #   Author of the script
   #   Name: Ezra Adamu
   #   Email : ezra00100@gmail.com
   #   Date created: 10/01/2022
   #   Date modified: 09/02/2022  

	class Mailer{
		

		function sendMail($to, $pword){
	   	
	   	$body ="<table  width=100% border=0 ><tr>";
	   	$body .="<td style=position:absolute;left:350;top:60;><h2><font color = #346699>MiniMailer.</font></h2></td></tr>";
	   	$body .='<tr><td colspan=2><br><br><strong>Dear Admin,</strong></td></tr>';
	   	$body .='<tr><td colspan=2>Your new password is <strong>'.$pword.'</strong></td><br/></tr>';
	   	$body .= '<tr><td colspan=2>Best regards.</td></tr></table>';
	   	
	   	$subject = 'Password Reset';  
	   	$from = 'MiniMailer <support@abc.com>';  
	       
	   	$headersfrom = '';
	   	$headersfrom .= 'MIME-Version: 1.0' . "\r\n";
	   	$headersfrom .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	   	$headersfrom .= 'From: '.$from.' '. "\r\n";

	   	$msg = '';
	   	
	   	if( mail($to,$subject,$body,$headersfrom)){
	   		$msg = '<h5 class="">E-mail Sent</h5>';
	   	} else {
	   		$msg = '<h5 class="">E-mail Delivery Failure!</h5>';

	   	}

	   	return $msg;
	   }

			 
	}

?>