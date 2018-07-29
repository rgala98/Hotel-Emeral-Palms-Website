
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <!-- Document title -->
    <title>Emerald Palms Resort</title>
     
    <!-- CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custom.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/vegas.min.css">
	
	<!--<link rel="stylesheet" href="assets/css/rtl.css">-->


    <!-- google fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,600">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800">	
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900">	
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Domine:400,700">
	

    
     <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>

    
</head>

<body>

    <section class="breadcrumb-botton-area">
<div class="container">
<div class="left pull-left">
<ul>
<li><a href="index.php">Home</a></li>
<li><i class="fa fa-caret-right" aria-hidden="true"></i></li>
<li>Contact Us</li>
</ul>
</div>
<div class="right pull-right">
<a class="a2a_dd" href="#"><i class="fa fa-share-alt" aria-hidden="true"></i> Share</a>
</div> 
</div>
</section>
<h1 align = "center">CONTACT US</h1>
<section class="contact-section" id="contact-us">

<div class="container">
<div class="row">

<div class="col-md-6 col-sm-6 col-xs-12">

<!-- Contact Form -->
<form id="ContactForm" data-toggle="validator" method = "POST" action = "http://localhost:8080/contake.php">
<div class="form-same-line form-group">
<input type="text" class="form-control" name="hfirstname" placeholder="First Name" required>
</div>
<div class="form-same-line form-group">
<input type="text" class="form-control" name="hlastname" placeholder="Last Name" required>
</div>
<div class="form-same-line form-group">
<input type="email" class="form-control" name="hemail" placeholder="Email" required>
</div>
<div class="form-group">
<textarea class="form-control" name="hmessage" placeholder="Write your message here" rows="4" required></textarea>
</div>
<div class="text-center">
<button type="submit" class="button-small-solid">SUBMIT</button>
<div id="cmsgSubmit" class="h3 text-center hidden"></div>
</div>
</form> 
<!-- end of contact form -->

</div>

<div class="col-md-3 col-sm-6 col-xs-12">
<div class="contact-text">
<h2>Corporate Office</h2>
<ul class="contact-info-list">
<li><h3><span>Address</span><br>602, Central Plaza,<br>166,CST Road, Kalina, Sanatacurz (E), Mumbai, Maharashtra 400098</h3></li>
<li><h3><span>Call Us</span><br>+91 (987) 654-3123</h3></li>
<li><h3><span>Mail Us</span><br>info@emeraldpalms.com</h3></li>
<li><h3><span>Timings</span><br>10 A.M. to 7 P.M.<br>(Except Sundays)</h3></li>

</ul>
</div>
</div>

<div class="col-md-3 col-sm-6 col-xs-12">
<div class="contact-text-right">
<h2>Our Resort</h2>
<p>Our Resort offers a wide range of services and amenities and typically includes entertainment and recreational activities. As a self-contained establishment, our Resort provides for most of a vacationer's needs while remaining on the premises (lodging, food, drink, sports, entertainment, shopping, etc.).</p>
</div>
</div>

</div>  
</div>  
</section>
<section id="cta">
<div class="container">
<div class="row">
<div class="col-md-9 col-sm-9 col-xs-12">
<h4>Choose to stay with us and enjoy modern home comforts in traditional setting.</h4>
</div>
<div class="col-md-3 col-sm-3 col-xs-12">
<a class="btn btn-cta text-right" href="rooms.php">Rooms &amp; Suites </a>
</div>

</div>
</div>
</section>
<a href="javascript:" id="return-to-top"><i class="fa fa-arrow-up"></i></a>
<?php
        include_once('footer.php');

    ?>