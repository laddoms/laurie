<footer>
	<H1 id="footerh1"><i>Let me Design your Dream Website</h1></i>
	<div id="footerleft">
		<p><a href="mailto:addoms@comcast.net/">
		<p class="footeremail"><B>Contact Laurie via Email at </p>
		<p class="footeremail" >addoms@comcast.net</p></B></a>
		<p>Or via the form</p><br />
		<p><a href="https://github.com/laddoms?tab=repositories" style="color:white;">Visit My Git Hub Repository</a><br /></p>
		<p>Or via my Linked In public page below</p>
		<a href="http://www.linkedin.com/in/laurieaddoms">
	
		<img src="images/linkedin.png" alt="Laurie on Linked In"></a>
	
	</div>
	
	<form method="post"  action="footer.inc.php" name="footerForm" id="footerForm" onsubmit="return validateSubmitReaders()">
			<div id="footercenter">
				<p>First Name:</p>
				<p>
					<input type="text" size="22" name="firstname" id="firstname" placeholder="Enter your first name">
				</p>
				<p>Last Name:</p>
				<p>
					<input type="text" size="22" name="lastname" id="lastname" placeholder="Enter your last name">
				</p>
				<p>Email Address:</p>
				<p>
					<input type="text" name="readersemail" size="30" id="readersemail" placeholder="Enter your email address">
				</p>
				<p>Message:</p>
				<p>
					<textarea rows="5" cols="27" name="postcontent" id="postcontent" placeholder="Enter your message"></textarea>
					<input type="submit" name="submit" value="Contact Me" >
				</p>
				<input type="hidden" name="contact" value="contactus">  
			</div>
		</form>
		<script src="js/jsfunctions.js"></script> 
		
	<div id="footerright">
			<p style="margin-left:3px;"><b>SITE MAP</p></b>
			<p><a href="index.php"style="color:white;">Home</a></p>
			<p><a href="#about"style="color:white;">About</a></p>
			<p><a href="#portfolio"style="color:white;">Portfolio</a></p>
			<p><a href="#resume"style="color:white;">My Resume</p></a>
			<p><a href="codepage.php" style="color:white;">Code Samples</p></a>
			<br /><br /><br />
			<p style="line-height:1.2em;"><?php echo"&copy;" . date("Y");?> Laurie Addoms</p>
			<br />
			
	</div>
<?php
		require('PHPMailer.php');
		require('Exception.php');
		use PHPMailer\PHPMailer\PHPMailer;
		use PHPMailer\PHPMailer\Exception;
		if($_SERVER['REQUEST_METHOD']=='POST')
			{
				if(!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['readersemail']) && !empty($_POST['postcontent']))
					{
						$error=1;   //declare flag var now and set it to 1 meaning an error exists
						$readersemail=$_POST['readersemail'];
						$firstname=$_POST['firstname'];	
						$lastname=$_POST['lastname'];
						$postcontent=$_POST['postcontent'];
						$postcontent=htmlspecialchars($postcontent);
						$emailmessage="NAME: $firstname $lastname\n\nMessage: $postcontent\n\nFrom: $readersemail";
						if(filter_var($readersemail, FILTER_VALIDATE_EMAIL)) 
							{
								$validatedreadersemail = $_POST['readersemail'];  ///store the readers email address is a var called validatedreadersemail
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
								$email->Subject   = 'Submission from Laurie Addoms.com';   ///subject of the email
								$email->Body      = $emailmessage;           //this is ok as a variable
								$email->AddAddress( 'addoms@comcast.net' );  //this is the 'to' address.
								if($email->Send())   ////sends the email
									{
										echo"<script type=\"text/javascript\">alert(\"Your message was sent to Laurie.\")</script>";
										$_POST=array();
										var_dump($_POST);
										header("Location:index.php?content=success");
									}
								else
									{
										header("Location:index.php?content=goodemailaddressdidnotsend error code is : $error");
										echo"line 92";
										//code gets to here in development env
									}
							 }
						 else	
							 {
								 header("Location:index.php?content=$error");  
							 }
					}
				else
					{
						header("Location:index.php?content=formnotfilledout"); 

					}
						
			}
	?>	
<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/jsfunctions.js"></script> 
</footer>