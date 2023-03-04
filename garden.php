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
		
		<title>Raised Bed Gardens</title>

		<h2 id="gardenH2">Raised Bed Gardens</h2>
		<div id="gardenimages">
			<div>	
				<figure>
					<img src="images/garden/garden1.jpg"  alt="image of bath upgrade" >
					<figcaption>5 x 3 Foot Raised bed Gardens</figcaption>
				</figure>
			</div>
			<div>
				<figure>
				<img src="images/garden/garden2.jpg"  alt="image of bath upgrade" >
					<figcaption>Started with seeds only in early spring</figcaption>
				</figure>
			</div>
			<div>
			  <figure>
					<img src="images/garden/garden3.jpg"  alt="image of bath upgrade" >
					<figcaption>Sugar snap peas that will grow on the trellis</figcaption>
				</figure>
			</div>
			  <div>
			  <figure>
				<img src="images/garden/garden4.jpg"  alt="image of bath upgrade" >
					<figcaption>The first three beds are potatos</figcaption>
				</figure>
			</div>
			<div>
				<figure>
					<img src="images/garden/garden5.jpg" alt="image of bath upgrade" >
					<figcaption>Fall lettuce</figcaption>
				</figure>
			</div>
			<div>
				<figure>
					<img src="images/garden/garden6.jpg"alt="image of bath upgrade" >
					<figcaption>Potatoes and Onions</figcaption>
				</figure>
			</div>
			<div>
				<figure>
					<img src="images/garden/garden7.jpg"alt="image of bath upgrade" >
					<figcaption>Onions</figcaption>
				</figure>
			</div>
			<div>
				<figure>
					<img src="images/garden/garden8.jpg"alt="image of bath upgrade" >
					<figcaption>Potatoes</figcaption>
				</figure>
			</div>
			<div>
				<figure>
					<img src="images/garden/garden9.jpg"alt="image of bath upgrade" >
					<figcaption>Full garden in early June</figcaption>
				</figure>
			</div>
			
			
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
	