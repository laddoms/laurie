<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">	
		<html lang="en">
		<meta name="description" content="Explore faces in nature. Images of nature, rocks, mountains, clouds, leaves, trees, fungi, shadows, and
		other things that have hidden faces in them" />
		<meta name="keywords" content="Faces in nature. Images of mountians, rocks, trees, leaves, faces, clouds, fungi, shadows, snow. Nature
		facts. Oak trees. Shadows. Clouds. Snow. The story of Wendy the tree. The story of Mr Mushroom." />
		<meta name="author" content="Laurie Addoms, Eva Keeley">
		<meta name="google-site-verification" content="SgSoecd7wlU8s7ZpugWhIgYAJd5VMNL3RKI4zTEtUl8" />
		
		<meta name=viewport content="width=device-width, initial-scale=1">
		<link href="https://fonts.googleapis.com/css?family=ZCOOL+XiaoWei" rel="stylesheet">
		
		<title>Explore Faces in Nature</title>
		<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
		<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    	<link href="styling.css" type="text/css" rel="stylesheet" />
</head>


<div id="contactformdiv">
				<h2>SUBMIT A FORM</H2>
				<form method="post" name="contactform" id="contactform" onsubmit="return validateSubmitContact()">
					<b>First Name:					
					<p><input type="text" size="22" name="firstname" id="contactfirstname" placeholder="Enter your first name">
					</p>
					<p>Last Name:</p>
					<p>
					<input type="text" size="22" name="lastname" id="contactlastname" placeholder="Enter your last name">
					</p>
					<p>Email Address:</p>
					<p>
					<input type="text" name="email" size="25" id="contactemail" placeholder="Enter your email address">
					</p>
					<p>Message:</p>
					<p>
						<textarea rows="5" cols="27" name="message" id="contactmessage" placeholder="Enter your message" style="font-weight:bold"; ></textarea>
					 </p>	
						<input type="submit" name="submit" value="Contact Us" style="font-weight:bold";></b>
					
					<input type="hidden" name="contactcontact" value="contactus"> 
				</form>
			</div>

<?php

			require('PHPMailer.php');
			require('Exception.php');
			use PHPMailer\PHPMailer\PHPMailer;
			use PHPMailer\PHPMailer\Exception;
			if($_SERVER['REQUEST_METHOD']=='POST')
				{
					if(!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email']) && !empty($_POST['message']))
						{
							$error=1;   //declare flag var now and set it to 1 meaning an error exists
							$email=$_POST['email'];
							$firstname=$_POST['firstname'];	
							$lastname=$_POST['lastname'];
							$message=$_POST['message'];
							$message=htmlspecialchars($message);
							$emailmessage="NAME:$firstname $lastname\n\nMessage:$message";
							if(filter_var($email, FILTER_VALIDATE_EMAIL)) 
								{
									$validatedreadersemail = $_POST['email'];  ///store the readers email address is a var called validatedreadersemail
									$error=0;   ////flag as no error
								}
							else
								{
									echo"<script type=text/javascript>alert(\"enter a valid email address.\")</script>"; 
									$error=1;   ///flag as error;
									$validatedreadersemail='';
								}
							if($error===0)  ///if no errors from above exist send the email to Laurie
								{
									$email = new PHPMailer();  ///instantiate a new instance of the phpmailer class
									$email->From      = $validatedreadersemail;   //this has to be in the form of an email address. Add a php email filter to validation.
									$email->FromName  = $firstname . $lastname;   ///the from line is a submission from the Readers Pages
									$email->Subject   = 'Submission from a Faces in Nature Reader';   ///subject of the email
									$email->Body      = $emailmessage;           //this is ok as a variable
									$email->AddAddress( 'addoms@comcast.net' );  //this is the 'to' address.
									if($email->Send())   ////sends the email
										{
											$_POST=array();
											echo"<script type=text/javascript>alert(\"Thank you for contacting Eva.\")</script>"; 
										}
									else
										{
											echo"<script type=text/javascript>alert(\"Your message did not send. Please try again.\")</script>"; 
										}
								 }
							 else	
								 {
									echo"<script type=text/javascript>alert(\" NOT valid email address.\")</script>"; 
								 }
						}
					
							
				}