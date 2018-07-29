
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />

    
    
    <!-- Document title -->
    <title>Emerald Palms Resorts</title>
     
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

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css" />
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />
	

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,600">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800">	
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900">	
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Domine:400,700">
	

    
     <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>

    
</head>

<body>

<div id="header-background">
    <div id="topbar" class="topbar-transparent">
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <ul class="top-menu">
                        <li><a href="#">Phone: +91 (987) 654-3210</a></li>
                        <li><a href="#">Email: info@emeraldpalms.com</a></li> 
                    </ul>
                </div>
                <div class="col-sm-3 hidden-xs">
                    <ul class="language-top-bar">
                        <li>
                            <div class="topbar-dropdown">
                                <a class="title"><i class="fa fa-globe"></i> GOA, IN</a>
                            </div>
                        </li>
                    </ul>     
                </div>
            </div>
        </div>
    </div>

    <header id="header" class="header-transparent">
        <div id="header-wrap">
            <div class="container">
                <div id="logo">
                    <a href="index.php" style="color: white;">
                    <h4>Emerald Palms Resort</h4>
                    </a>
                </div>
                <div class="container">
                    <nav id="hmenu">
                        <div id="head-mobile"></div>
                            <div class="button"></div>
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="about.php">About Us</a></li>
                                    <li><a href="room-grid.php">Rooms</a>
                                        <ul>
                                        <li><a href="room-grid.php">Room Grid</a> </li>
                                        <li><a href="double-room.php">Double Rooms</a> </li>
                                        <li><a href="single-room.php">Single Rooms</a> </li>
                                        <li><a href="supdex.php">Suite Rooms</a> </li>
                                        </ul>
                                    </li>
                                    <li><a href="#services-section">Services</a></li>
                                    <li><a href="#facilities1">Facilities</a></li>
                                    <li><a href="contact.php">Contact Us</a></li>
                                </ul>
                    </nav>
                </div>       
            </div>
        </div> 
    </header>
		
		
	<div class="intro center-vertically">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="header-content text-center">
						<p>TRADITION  &amp; STYLE</p>
                            <h1 class="margin-auto">ENJOY A LUXURY EXPERIENCE</h1>
                            <button onclick="location.href='room-grid.php'" type="submit" class="btn btn-rs">Rooms &amp; Suites</button> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>		
<!--end of header background-->

    <section id="booking-section" class="content-booking">
        <div class="container">
            <div class="form-container col-sm-12">
				<h2> Enquire For <span> Reservation</span></h2>
						<!-- Booking Form -->
                    <form id="BookingForm" data-toggle="validator" method = "POST" action="http://localhost:8080/res.php">

                        <div class="form-group col-md-3 col-sm-6 col-xs-12">
                            <input type="text" class="form-control" name="byourname" placeholder="Your Name" required>
                        </div>

                        <div class="form-group col-md-3 col-sm-6 col-xs-12">
                            <input type="number" min=1 class="form-control" name="bnumberofrooms" placeholder="Number of rooms" required>
                        </div>

                        <div class="form-group col-md-3 col-sm-6 col-xs-12">
                            <input type="email" class="form-control" name="bemail" placeholder="Email" required>
                        </div>

                        <div class="form-group col-md-3 col-sm-6 col-xs-12">
                            <input type="number" min = 1 class="form-control" name="bnumberofpeople" placeholder="Number of people" required>
                        </div>
                        <div class="form-group col-md-3 col-sm-6 col-xs-12">
                            <input type="text" class="form-control" name="bphonenumber" placeholder="Phone number with CC" required>
                        </div>

                        <div class="form-group col-md-3 col-sm-6 col-xs-12">
                            <input type='date' class="form-control" placeholder="YYYY-MM-DD" name="bcheckin" required >

                        </div>

                        <div class="form-group col-md-3 col-sm-6 col-xs-12">
                            <input type='date' class="form-control" name="bcheckout" placeholder="YYYY-MM-DD" required>
                        </div>

                        <div class="form-group col-md-3 col-sm-6 col-xs-12">
                            <button type="submit" class="button-small-solid">Enquire</button>
                        <div id="bmsgSubmit" class="h3 text-center hidden"></div>
                        </div>
                    </form>
                    <div class="text-danger">* NOTE: Please enter all the details properly and carefully.</div>

            </div>
        </div>
    </section>
<!-- end of contact form -->	
	
    <section id="discover" class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="text-left single-content">
                         
                        <h3>welcome to <span>Emerald Palms</span> luxury hotel <br>and spa </h3>
                        <p>
                            The Emerald Palms Resort is a modern and comfortable hotel with professional and friendly staff always prepared to satisfy individual needs and wishes of our guests. Give your family a traditional and relaxing vacation with us. 
                        </p>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="text-left">
                        <div class="popup-gallery">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <a class="image-popup-no-margins" href="images/gallery01.jpg" title="Relax time">
                                    <img src="images/gallery01.jpg" height="" width="">
                                </a>
                            </div> 
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <a class="image-popup-no-margins" href="images/gallery03.jpg" title="Free place on beach">
                                    <img src="images/gallery02.jpg" height="" width="">
                                </a>
                            <div class="space-bottom-large"> </div>
                                <a class="image-popup-no-margins" href="images/gallery02.jpg" title="Relax">
                                    <img src="images/gallery03.jpg" height="" width="">
                                </a>
                            </div> 
                        </div> 
                    </div> 					
				</div>
            </div>
                
        </div>
            <!-- end row -->
    </div>
        <!-- end container -->
    </section>


    <section id="services-section" class="services">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5">
                    <div class="single-content-left">
                       <div class="section_title2">
                            <h2>Enjoy</h2>
                            <h3>OUR services</h3>
                        </div>
                        <div class="col-md-6">
                            <div class="services-box">
                                <h4>SPA</h4>
                                <p>It's a good idea always to do something relaxing prior to making an important decision in your life.</p>
                            </div>
                            <hr>

                            <div class="services-box">
                                <h4>POOL</h4>
                                <p>This life is like a swimming pool. You dive into the water, but you can't see how deep it is.</p>
                            </div>
                            <hr>

                            <div class="services-box">
                                <h4>RESTURANT</h4>
                                <p>Humor keeps us alive. Humor and food. Don't forget food. You can go a week without laughing.</p>
                            </div>
                        </div>

                            <div class="col-md-6">
                                <div class="services-box">
                                    <h4>MASSAGE</h4>
                                    <p>We believe fine living includes attention to health and well being.<br><br></p>
                                </div>
                                <hr>
                                <div class="services-box">
                                    <h4>MUSIC</h4>
                                    <p>How is it that music can, without words, evoke our laughter, our fears, our highest aspirations ?</p>
                                </div>
                                <hr>
                                <div class="services-box">
                                    <h4>WATER SKILLING</h4>
                                    <p>You can't stop the waves, but you can learn to surf. </p>
                                </div>
                            </div>
                        </div>
                    </div>
				
                    <div class="col-md-6 col-md-offset-1 padding-0">
                        <div class="content-hotel booking template">
                            <img class="img-responsive" src="images/services.jpg" alt="hotel booking template">
                        </div>
                    </div>
                </div>
			    <div class="row">
                <div class="col-md-6 padding-0">
                    <div class="content-hotel booking template">
                        <img class="img-responsive" src="images/services2.jpg" alt="hotel booking template">

					</div>
                </div>
                <div class="col-md-5" id="facilities1">
                    <div class="single-content-right">
                       <div class="section_title">
                            <h2>Happy with</h2>
                            <h3>OUR facilities</h3>
                        </div>

                            <p>
                            We offer a variety of boutique services and facilities to make sure your stay is both comfortable and memorable, from our 24/7 reception and complimentary high-speed WiFi access to our intimate rooftop pool and terrace.
                            </p><hr>
                        <div class="services-box-right">
                            <img class="img-responsive" src="images/services-promo-right.jpg" alt="hotel booking template">						
                        </div>	
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="attractions-section" id="attractions">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section_title">
                        <h2>relax with</h2>
                        <h3>OUR attractions</h3>
                    </div>
                        <p>
                        Give your family all the fun and excitement of more than 100 great attractions like awsome beaches, night life, amazing food etc. at Goa. Also, enjoy amazing services at out beachside resort. Come and take lot of memories this vacation with us.  It is located at best beach loaction where over a million travellers come to enjoy. Enjoy a relaxing massage at our spa, there are watersports for the adventure lovers. This is a modern and comfortable hotel with professional and friendly staff always prepared to satisfy individual needs and wishes of our guests. </p><br />
                    </div>
                </div> 
            </div>
    <!-- row end -->

            <div class="container" id="facilities1">
                <div class="attractions-carousel ">
    
    <!-- start item -->
    <div class="col-md-8 col-sm-8 col-xs-12">
                            <img class="img-responsive-attractions" src="images/attractions01.jpg" alt="hotel booking template">
                        </div>
                    <div class="item-attractions">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="attractions-content">
                                <h4>Visit places</h4>
                                <p>Goa is one of the most visited places in India as there are so many places to visit in Goa.<br>Baga Beach - 10Kms.<br>Grand Island - 7 Kms<br>Dudhsagar Water Falls - 69 Kms<br>..&amp; many more places.</p>
                                <div class="attractions-btn">See more<i class="fa fa-arrow-right"></i></div>
                            </div>
                        </div>

                        
                    </div>
    <!-- end item -->
    <!-- start item --><br><br>
                    <div class="item-attractions">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="attractions-content">
                                <h4>Beach games</h4>
                                <p>Beach Games for Kids. Beach Relay. Beach Kite Flying. The beach is a perfect place for kite flying - large, flat areas with no trees. Beach Bubble Blowing. Beach River Race. Beach Limbo.</p>
                                <div class="attractions-btn">See more<i class="fa fa-arrow-right"></i></div>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <img class="img-responsive-attractions" src="images/attractions02.jpg" alt="hotel booking template">
                        </div>
                    </div>
 <!-- end item -->
  <!-- start item --><br><br>
                    <div class="item-attractions">
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <img class="img-responsive-attractions" src="images/attractions03.jpg" alt="hotel booking template">
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="attractions-content">
                                <h4>Learn to swim </h4>
                                <p>Our Learn-to-Swim program offers a group instructional setting for participants of all swimming levels with water-play activities. These water-play activities will help teach your child how to swim and love it! </p>
                                <div class="attractions-btn">See more<i class="fa fa-arrow-right"></i></div>
                            </div>
                        </div>
                    </div>
 <!-- end item -->
                </div>
            </div>

 <!-- second carousel -->
 
            <div class="container">
                <div class="attractions-carousel2">
 
 <!-- start item --><br>
                    <div class="item-attractions">
                        

                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="attractions-content">
                                <h4>Massage relax</h4>
                                <p>Khmer massage makes use of passive stretching and gentle pressure applied along energy lines to relax the body and ease muscular tension.<br><br><br></p>
                                <div class="attractions-btn">See more<i class="fa fa-arrow-right"></i></div>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <img class="img-responsive-attractions" src="images/attractions04.jpg" alt="hotel booking template">
                        </div>
                    </div>
 <!-- end item -->
 <!-- start item --><br><br><br><br>
                    <div class="item-attractions">
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <img class="img-responsive-attractions" src="images/attractions05.jpg" alt="hotel booking template">
                        </div>

                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="attractions-content">
                                <h4>Spa relax</h4>
                                <p>Through holistic healing and targeted home care, we aim to help integrate self- care into the daily lives of the guests we serve.</p>
                                <div class="attractions-btn">See more<i class="fa fa-arrow-right"></i></div>
                            </div>
                        </div>

                    </div>
 <!-- end item -->
  <!-- start item -->
                    <div class="item-attractions">
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <img class="img-responsive-attractions" src="images/attractions06.jpg" alt="hotel booking template">
                        </div>

                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="attractions-content">
                                <h4>Yoga relax</h4>
                                <p>Not only does yoga do a body good, but it can also increase concentration, inspire thought, and open your heart, which are all positives for your body to function after a vacation.</p>
                                <div class="attractions-btn">See more<i class="fa fa-arrow-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->
                </div>
            </div> 
                    <!-- end second carousel -->
        
    </section>

    <section class="blog-section" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section_title">
                        <h2>Blog</h2>
                        <h3>Latest news</h3>
                    </div>
                </div>
            </div> 
        </div>
        <div class="nospace container">
            <div class="col-md-6 col-sm-6 col-xs-12">
        <!-- start news-->
                <div class="grid-hotel space-right-double">
                    <figure class="effect-sadie">
                        <img src="images/blog1.jpg" alt="blog"/>
                        <figcaption>
                            <h2>3 reasons to take a break</h2>
                            <p>It's time we say "enough is enough" and learn to put our needs first. Taking time off is good for your mental and physical health, and you can come back more productive and effective. It's a win-win. <br /> <a href="#">View more</a></p>

                        </figcaption>			
                    </figure>
                </div>
        <!-- end news -->
            </div>
        
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="col-md-6 col-sm-6 col-xs-12">
    <!-- start news-->
                    <div class="grid-hotel space-right">
                        <figure class="effect-sadie">
                            <img src="images/blog2.jpg" alt="blog"/>
                                <figcaption>
                                    <h2>The most famous beach</h2>
                                    <p>Every year for our World's Best Awards survey, Travel + Leisure asks readers to weigh in on travel experiences around the globe.</a></p>
                                </figcaption>			
                        </figure>
                    </div>
 <!-- end news -->
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12">
<!-- start news-->
                    <div class="grid-hotel space-left">
                        <figure class="effect-sadie">
                            <img src="images/blog3.jpg" alt="blog"/>
                            <figcaption>
                                <h2>Romantic atmosphere</h2>
                                <p>Want to give you and your partner the opportunity to spend time together in a pleasant atmosphere ? Choose Us.!</a></p>
                            </figcaption>			
                        </figure>
                    </div>
 <!-- end news -->
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
<!-- start news-->
                    <div class="grid-hotel space-right space-top">
                        <figure class="effect-sadie">
                            <img src="images/blog4.jpg" alt="blog"/>
                                <figcaption>
                                <h2>Wedding Ceremony</h2>
                                <p>Recently engaged? Let Us be the next step after “Yes”! Our dedicated Wedding Specialist will help ease the stress of the event planning.</a></p>
                                </figcaption>			
                        </figure>
                    </div>
 <!-- end news -->
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12">
                <!-- start news-->
                    <div class="grid-hotel space-left space-top">
                        <figure class="effect-sadie">
                            <img src="images/blog5.jpg" alt="blog"/>
                                <figcaption>
                                <h2>Ideas for a party</h2>
                                <p>Both you and your child will enjoy making plans that reflect her interests whether it's a sports theme, an art party, a backyard beach picnic or an animal adventure.</a></p>
                                </figcaption>			
                        </figure>
                    </div>
 <!-- end news -->
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
                    <a class="btn btn-cta text-right" href="room-grid.php">Rooms &amp; Suites </a>
                </div>

            </div>
        </div>
    </section>

    <a href="javascript:" id="return-to-top"><i class="fa fa-arrow-up"></i></a>


    <?php
        include_once('footer.php');

    ?>