<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>	
		<html lang="en">
		<meta name="description" content="Laurie Addoms, Web developer and designer. Experienced in a multitude of web programming languages, both 
				client side and server side scripting" />
		<meta name="keywords" content="Laurie Addoms, web development, web designer, HTML, CSS, PHP, JavaScript, Java, MySQL, database design, 
			Java, C++, XML, XAMPP, Notepad++, NetBeans, Komodo Editor, Visual Studio, Visual Studio Code, Code Blocks" />
		<meta name="author" content="Laurie Addoms">
		<!--meta name="google-site-verification" content="SgSoecd7wlU8s7ZpugWhIgYAJd5VMNL3RKI4zTEtUl8" /-->
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<meta name=viewport content="width=device-width, initial-scale=1">
		<link href="https://fonts.googleapis.com/css?family=DM+Serif+Text&display=swap" rel="stylesheet"> 
		<meta http-equiv="content-type" content="text/html;charset=uts-8" />
		<title>Laurie Addoms | Unique Website Development and Design </title>
		<link href="styling.css" type="text/css" rel="stylesheet" />
</head>
<html>
	<link href="https://fonts.googleapis.com/css?family=Marck+Script" rel="stylesheet"> 
<body>
	<div id="wrapper">
		<?php include('header.inc.php'); ?>	
		<div id="header">
			<h1 id="titleh1">Laurie Addoms</h1>
			<h3 id="titleh3">Unique Website Creations</h3>
			<ul id="titleul">
				<li>DESIGN |</li>
				<li>DEVELOPMENT |</li>
				<li>SEO |</LI>
				<li>SOFTWARE DEVELOPMENT</LI>
			<ul>
		</div>
		
			<?php include("resume.nav.inc.php");?>
				<h1 id="promotingH1">Promoting your Organization through Visually Engaging Websites</h1>
			
			<h2 style="text-align:center" id="codeH2">The following PHP, HTML, and JavaScript sets up a form for a user to submit their 
			own photo to a website. <a href="https://github.com/laddoms/faces">Find the downloadable code here on my GitHub repository</a></h2>
		<div id="codepage">	
			<img src="images/codesamplepage1.png" alt="sample image of php and html code">
			<img src="images/codesamplepage2.png" alt="sample image of php and html code">
			<img src="images/codesamplepage3.png" alt="sample image of php and html code">
		</div>	
	</div>

		
		<?php include("footer.inc.php"); ?>
	
</body>
<script src="js/jquery-1.11.2.min.js"></script>
<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    }
  });
}
</script>