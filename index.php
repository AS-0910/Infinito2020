<?php
session_start();
include "connect.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Infinito 2k21</title>
    <?php
    require('./templates/header.php');
    ?>
</head>

<body>
    <div class="main-page-wrapper">
        <!--
		=============================================
			Theme Header
		==============================================
		-->
        <header class="theme-main-header">
            <div class="container">
                <a href="index.php" class="logo float-left tran4s"><img src="images/logo/logo.png" alt="Logo" style="width:56px; height:56px;" /></a>

                <!-- ========================= Theme Feature Page Menu ======================= -->
                <nav class="navbar float-right theme-main-menu one-page-menu">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false" style="margin-top:-4px;">
                            <span class="sr-only">Toggle navigation</span>
                            Menu
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="./index.php">Home</a></li>
                            <li><a href="./events.php">Events</a></li>
                            <li><a href="./team.php">Team</a></li>
                            <li><a href="./gallery.php">Gallery</a></li>
                            <li><a href="./registration.php">Register</a></li>
                            <?php
                            if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
                                echo '<li><a href="./profile.php">Profile</a></li>
                                          <li><a href="./logout.php">Logout</a></li>';
                            } else {
                                echo '
                                    <li><a href="./signIn.php">Sign In</a></li>';
                            }
                            ?>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </nav>
                <!-- /.theme-feature-menu -->
            </div>
        </header>
        <!-- /.theme-main-header -->

        <!--
		=====================================================
			Theme Main SLider
		=====================================================
		-->
        <div id="home" class="banner">
            <div class="rev_slider_wrapper">
                <!-- START REVOLUTION SLIDER 5.0.7 auto mode -->
                <div id="main-banner-slider" class="rev_slider video-slider" data-version="5.0.7">
                    <ul>
                        <!-- SLIDE1    -->
                        <li data-index="rs-280" data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-title="Feel The Burn" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="images/home/cover_regenesis.png" style="width:100% " alt="image" class="rev-slidebg" data-bgparallax="3" data-bgposition="center center" data-duration="20000" data-ease="Linear.easeIn" data-kenburns="on" data-no-retina="" data-offsetend="0 0" data-offsetstart="0 0" data-rotateend="0" data-rotatestart="0" data-scaleend="90" data-scalestart="110" /> NR. 3 -->

                        </li>
                        <!-- SLIDE3    -->
                        <li data-index="rs-18" data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="" data-rotate="0" data-saveperformance="off" data-title="Feel The burn" data-description="">
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-58','-33','-33','-100']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 6; white-space: nowrap;text-align:center;">
                                <h1 style="color:#d73e4d;font-weight:100">Feel the Burn</h1>
                                <h3 style="color:white;padding-top:20px">Infinito 2k21</h3>
                            </div>
                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['52','185','185','105']" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;" data-start="3000" data-splitin="none" data-splitout="none" data-responsive_offset="on">
                                <a href="schedule.php" class="project-button hvr-bounce-to-right">Schedule</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- END REVOLUTION SLIDER -->
        </div>
        <!--    /#banner -->

        <!--
		=====================================================
			About us Section
		=====================================================
		-->
        <section id="about-us">

            <div class="container">
                <div class="theme-title">
                    <h2>Welcome to Infinito</h2>
                </div>
                <!-- /.theme-title -->

                <div class="row" style="margin: 10px;">
                    <div class="row">
                        <div class="col-lg-8 col-md-6 col-sm-12" style="font-size:20px;font-weight:300">

                            <div class="col" style="display: flex; flex-direction: column; align-items: center; margin-bottom: 10%;">
                                <p class="about-infinito">
                                    <br>
                                    Infinito is the annual sports fest of IIT Patna.
                                    <br>

                                    <br>
                                    Once a humble initiative, after just three editions, Infinito has already grown into the biggest and most awaited sports fest of Bihar. It is an endeavor to ensure that no talent goes unnoticed. 
                                    Through Infinito we provide people a platform where they can not only display their skills but also learn and develop the qualities of a true sportsman. Knit together are the virtues of team spirit, undying determination and zeal, and Infinito is an embodiment of them all.
                                    <br>

                                    <br>
                                    Infinito is a three days fest and these three days see participation from colleges all over India. With a plethora of sporting events and exhilarating cultural nights we leave no stones unturned into ensuring that these three days are filled with fun and thrill and that everyone who is a part of our ever-growing family gets to make the most beautiful of memories.
                                    <br>

                                    <br>
                                    Let's sweat to glory, together.
                                    <br>
                                </p>
                            </div>

                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 about-image">
                            <img src="images/home/about_20.png" alt="Infinito-Pic" id="image1">
                            <img src="images/home/about_19.png" alt="Infinito-Pic" id="image2">

                            <!-- <div style="display:flex; justify-content:center;margin-top:25px"> -->
                                <!--<button class="hell" style="background:black;font-size:20px; border-radius:10px;padding:10px"><a style="color:white" href="./registration.php" class="project-button hvr-bounce-to-right">REGISTER HERE!</a></button>-->
                            <!-- </div> -->
                            <!-- <div style="display:flex; justify-content:center;margin-top:25px">
                        <button class="hell" style="background:black;font-size:20px; border-radius:5px;padding:10px"><a style="color:white" href="schedule.html" class="project-button hvr-bounce-to-right">SCHEDULE!</a></button>
                        </div> -->
                            <div class="row about-buttons">
                                <div class="button-schedule hvr-bounce-to-right">
                                    <a href="schedule.php">View Schedule</a>
                                </div>

                                <div class="button-brochure hvr-bounce-to-right">
                                    <a href="admin\Conspectus21.pdf" target="_blank">Learn More</a>
                                </div>
                            </div>
                            
                        </div>
                    </div>

                    <!-- /.row -->
                </div>
                <!-- /.container -->
                <!-- <div class="row" id="countdown">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <h1>Countdown to Infinito</h1>
                </div>
                <div class="days time col-lg-2 col-md-2 col-sm-3 col-xs-3 ">
                    <span id='days'> 0 </span><span>Days</span>
                </div>
                <div class="hours time col-lg-2 col-md-2 col-sm-3 col-xs-3">
                    <span id='hours'>0</span><span>Hours</span>
                </div>
                <div class="minutes time col-lg-2 col-md-2 col-sm-3 col-xs-3">
                    <span id='minutes'> 0 </span><span> Minutes</span>
                </div>
                <div class="seconds time col-lg-2 col-md-2 col-sm-3 col-xs-3">
                    <span id='seconds'> 0 </span><span>Seconds</span>
                </div>
            </div> -->
        </section>
        <!-- /#about-us -->

        <!--
		=====================================================
			events Section
		=====================================================
		-->
        <div id="events-section">
            <div class="container">
                <div class="theme-title">
                    <h2 style="color: #ffffff">EVENTS</h2>
                    <p>
                        The fest witnesses contenders stunning their rivals by their passion , their dedication and earnest desire to win and conquer the arena in the following disciplines of interest.
                    </p>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-events-content chess">
                            <div class="icon-heading tran3s event-heading">
                                <div class="icon tran3s">
                                    <i class="fas fa-chess-knight" aria-hidden="true"></i>
                                </div>
                                <h6><a href="#" class="tran3s">Chess Tournament</a></h6>
                            </div>
                            <p>
                                “Play the opening like a book, the middlegame like a magician, and the endgame like a machine.” <br>– Rudolph Spielmann
                            </p>
                            <p>&nbsp;</p>
                            <div class="events-tp-caption">
                                <a href="gameReg.php" class="project-button hvr-bounce-to-right">Register</a>
                                <!-- <a id="modal-btn--1" href="https://drive.google.com/file/d/1iWYbBkCWc-DQyNbE9atzdbtsI_mgQ9Hj/view?usp=drivesdk" class="project-button hvr-bounce-to-right" target="_blank">Payment</a> -->
                            </div>
                        </div>
                        <!-- /.single-events-content -->
                    </div>
                    <!-- /.col-lg -->

                    <div class="col-lg-4">
                        <div class="single-events-content bgmi">
                            <div class="icon-heading tran3s">
                                <div class="icon tran3s">
                                    <i class="fas fa-gamepad" aria-hidden="true"></i>
                                </div>
                                <h6><a href="#" class="tran3s">BGMI Tournament</a></h6>
                            </div>
                            <p>
                                "Watch out. These boys have got a bit of an arsenal and they don't mind using it!"
                            </p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <div class="events-tp-caption">
                                <a href="gameReg.php" class="project-button hvr-bounce-to-right">Register</a>
                                <!-- <a id="modal-btn--1" href="https://drive.google.com/file/d/1iWYbBkCWc-DQyNbE9atzdbtsI_mgQ9Hj/view?usp=drivesdk" target="_blank" class="project-button hvr-bounce-to-right">Payment</a> -->
                            </div>
                        </div>
                        <!-- /.single-events-content -->
                    </div>
                    <!-- /.col-lg -->

                    <div class="col-lg-4">
                        <div class="single-events-content cod">
                            <div class="icon-heading tran3s">
                                <div class="icon tran3s">
                                    <i class="fas fa-gamepad" aria-hidden="true"></i>
                                </div>
                                <h6><a href="#" class="tran3s">COD MOBILE Tournament</a></h6>
                            </div>
                            <p>
                                "We must be prepared to make heroic sacrifices for the cause of peace that we make ungrudgingly for the cause of war. There is no task that is more important or closer to my heart."
                                — Albert Einstein
                            </p>
                            <div class="events-tp-caption">
                                <a href="gameReg.php" class="project-button hvr-bounce-to-right">Register</a>
                                <!-- <a id="modal-btn--1" href="https://drive.google.com/file/d/1iWYbBkCWc-DQyNbE9atzdbtsI_mgQ9Hj/view?usp=drivesdk" class="project-button hvr-bounce-to-right" target="_blank">Payment</a> -->
                            </div>
                        </div>
                        <!-- /.single-events-content -->
                    </div>
                </div>
            </div>
            <!-- /.container -->
            <div class="btn_out" style="display: flex; justify-content: center;">
                <div class="out_btn" >
                    <a class="tp-caption">
                        <a href="./events.php" class="score-btn project-button hvr-bounce-to-right" style="color:white; padding:10px 30px;font-size:16px;border: #d8545d 2px solid;  width:200px; text-align:center;">See More Events</a>
                    </a>
                </div>
                
            </div>               
        </div>
        <!-- /#events-section -->

        <!-- SLIDER
         -->



        <!-- 
<div  class="container">
    <div class="container" >
        <div class="theme-title">
            <h2>Guest Lectures  </h2>
        </div>

    </div>
    
</div>
<div class="slideshow-container">



<a href="https://www.youtube.com/watch?v=5M05Ob94P-c">
<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="images/Guest Lectures/sonali.jpeg" style="width:100%">
  <div class="text"></div>
</div>
</a>

<a href="https://www.youtube.com/watch?v=6TJc5oGnFwY">
<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="images/Guest Lectures/Lokesh.jpeg" style="width:100%">
  <div class="text"></div>
</div>
</a>

<a href="https://www.youtube.com/watch?v=oAANoOl9FxM">
<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="images/Guest Lectures/sapna.jpeg" style="width:100%">
  <div class="text"></div>
</div>
</a>

<a href="https://www.youtube.com/watch?v=8XyiZ4QWETo">
<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="images/Guest Lectures/shams.jpeg" style="width:100%">
  <div class="text"></div>
</div>
</a>

<a href="https://www.youtube.com/watch?v=JMLvq_BQJJQ">
<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="images/Guest Lectures/MD A.jpeg" style="width:100%">
  <div class="text"></div>
</a>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span> 
  <span class="dot"></span> 
</div> -->





        <!--slider  end  -->




        <!--
		=====================================================
		Scores Section
		=====================================================
        -->

        <!-- removed stray comment end sign from here -->

        <!-- /#scores-section -->
        <!--
		=====================================================
		Blog Section
		=====================================================
        -->
        <!-- <div id="updates">
            <div id="blog-section">
                <div class="container">
                    <div class="theme-title">
                        <h2>Updates</h2>
                        <p>
                            Be updated with the latest news in the fest
                        </p>
                    </div> -->
        <!-- /.theme-title -->

        <!-- <div class="clear-fix">
                        <? php // require('./pullUpdates.php'); 
                        ?> -->
        <!-- If any problem hers count no of pairs of divs so that every div here has a counter closing div
                     -->
        <!-- </div> -->
        <!-- /.col- -->
        <!-- </div> -->
        <!-- /.clear-fix -->
        <!-- </div> -->
        <!-- /.container -->
        <!-- </div> -->
        <!-- /#blog-section -->
        <!-- </div> -->
        <!-- removed stray comment end sign from here -->

        <!--
	=====================================================
		Page middle banner
	=====================================================
	-->

        <div class="page-middle-banner">
            <div class="opacity">
                <h3>Feel The
                    <!-- <span class="p-color">&amp;</span>    -->
                    Burn
                </h3>
                <a href="./admin/Conspectus21.pdf" class="project-button hvr-bounce-to-right" target="_blank" id="sponsors">Brochure</a>
            </div>
            <!-- /.opacity -->
        </div>
        <!-- /.page-middle-banner -->

        <!--
	=====================================================
		Partner Section
	=====================================================
	-->
        <div class="theme-title">
            <h2>Sponsors</h2>
        </div>
        <div id="partner-section">
            <div class="container">

                <div id="partner_logo" class="row owl-carousel owl-theme">
                    <div class="item"><a href = "#"><img src="images/logo/regenesis_sponsors/comm_events.png" alt="logo" /></a></div>
                    <div class="item"><a href = "#"><img src="images/logo/regenesis_sponsors/enfield.png" alt="logo" /></a></div>
                    <div class="item"><a href = "#"><img src="images/logo/regenesis_sponsors/layyon.png" alt="logo" /></a></div>
                    <div class="item"><a href = "#"><img src="images/logo/regenesis_sponsors/ncc.png" alt="logo" /></a></div>
                    <div class="item"><a href = "#"><img src="images/logo/regenesis_sponsors/sparx.png" alt="logo" /></a></div>
                    <div class="item"><a href = "#"><img src="images/logo/regenesis_sponsors/big_95.png" alt="logo" /></a></div>
                    <div class="item"><a href = "#"><img src="images/logo/regenesis_sponsors/bizarre.png" alt="logo" /></a></div>
                    <div class="item"><a href = "#"><img src="images/logo/regenesis_sponsors/ruban.png" alt="logo" /></a></div>
                    <div class="item"><a href = "#"><img src="images/logo/regenesis_sponsors/eventom.png" alt="logo" /></a></div>
                    <div class="item"><a href = "#"><img src="images/logo/regenesis_sponsors/varta.png" alt="logo" /></a></div>
                    <div class="item"><a href = "#"><img src="images/logo/regenesis_sponsors/zebronics.png" alt="logo" /></a></div>

                    <!-- <div class="item"><img src="images/logo/c3.jpeg" alt="logo" /></div> -->
                </div>
                <!-- End .partner_logo -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /#partner-section -->
        <!--
	=====================================================
		Footer & Contact Section 
	=====================================================
	-->
        <div id="contact-section">
            <div class="container">
                <h2 style="margin-bottom: 35px;">Contact Info</h2>
                <div class="clear-fix contact-address-content">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="left-side">
                            <ul>
                                <li>
                                    <div class="icon tran3s round-border p-color-bg">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    </div>
                                    <h6>Address</h6>
                                    <p>IIT Patna , Bihta , Patna , Bihar</p>
                                </li>
                                <li>
                                    <div class="icon tran3s round-border p-color-bg">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                    </div>
                                    <a href="tel:+919801884535" style="color:#6f6f6f;">
                                        <h6>Phone</h6>
                                        <p>+91 9801884535</p>
                                    </a>
                                </li>
                                <li>
                                    <div class="icon tran3s round-border p-color-bg">
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                    </div>
                                    <a href="mailto:iitpsports@gmail.com" style="color:#6f6f6f;">
                                    <h6>Email</h6>
                                    <p>iitpsports@gmail.com</p>
                                    </a>
                                    <p>it_support@infinito.org.in</p>
                                </li>
                            </ul>
                        </div>
                        <!-- /.left-side -->
                    </div>
                    <div class="right-side col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14399.37835508978!2d84.8434447170254!3d25.54355318850096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x398d567a193702ff%3A0xc9c527c7faec3056!2sIIT+Patna+Administration+Block!5e0!3m2!1sen!2sin!4v1539177184721" width="100%" height="100%" frameborder="0" style="border-radius: 5px" allowfullscreen></iframe>

                    </div>
                </div>
                <!-- /.contact-address-content -->
            </div>

            <!-- /.container -->
        </div>
        <!-- /#contact-section -->

    <?php
    require('./templates/footer.php');
    ?>
    
        <script>
            var slideIndex = 0;
            showSlides();



            function showSlides() {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("dot");
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                slideIndex++;
                if (slideIndex > slides.length) {
                    slideIndex = 1
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex - 1].style.display = "block";
                dots[slideIndex - 1].className += " active";
                setTimeout(showSlides, 2000); // Change image every 2 seconds
            }
        </script>



</body>

</html>