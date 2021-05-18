<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Ocloud Hotel Seoul</title>
        <link rel="icon" href="img/icon/ocloud-icon.png" />
	<!-- css -->
        <link rel="stylesheet" type="text/css" media="all" href="/css/vendor.min.css"/>
        <link rel="stylesheet" type="text/css" media="all" href="/css/style.min.css"/>
    <!-- js -->
    <script type="text/javascript" src="/js/vendor.min.js"></script>
    <script type="text/javascript" src="/js/app.min.js"></script>
    <!-- <script type="text/javascript" src="/js/demand.js"></script> -->

        
        
</head>
<body>
	<div class="site">
	    <div class="header hidden-xs hidden-sm">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12">
	                    
	                    <div class="logo">
	                        <a href="https://apy-webapp.azurewebsites.net/"><img src="/img/layout/logo.png" style="height:80px;width:80px;" alt="Ocloud Hotel Seoul"/></a>
                            
	                    </div><!-- /.logo -->
	
	                    <div class="top-misc ">
	                       <div class="contact-info">
	                            <div class="map">
	                                <a href="https://www.google.se/maps/place/Ocloud+Hotel/@37.5030575,127.0216057,17z/data=!3m1!4b1!4m8!3m7!1s0x357ca15f512e7f87:0x96e12735feeb2827!5m2!4m1!1i2!8m2!3d37.5030575!4d127.0237944" target="_blank"><img src="/img/layout/maps.png" style="height:15px;width:15px";alt="Ocloud Hotel Map" /></a>
	                            </div><!-- /.map -->
	                            <div class="phone">
	                            <a href="tel:+82 1899-9994">
	                               <img style="height:15px;width:15px;" src="/img/layout/telephone.png" alt="Ocloud Hotel's Phone" /><span>+88-2-3480-8640</span>
	                            </a>
	                            </div><!-- /.phone -->
	                        </div><!-- /.contact-info -->
	                        <div class="cta-btns">
	                            <a href="booking.php" class="btn primary small">Booking</a>
								<?php
                                      session_start();         
                                if (!isset($_SESSION['customer'])) {
                                    echo '<a href="login.php" class="btn primary small">Sign in</a>';
                             }
                             else{
                                 echo '<a href="bookinghistory.php" class="btn primary small">Booking History</a>';
                                 echo '<a href="logout.php" class="btn primary small" style="margin-left:4px;">Sign out</a>';
                             }
                             ?>
	                        </div><!-- /.cta-btns -->
	                         
	                    </div><!-- /.top-misc -->
						
                    <div class="main-nav">
                        <ul>
            <li ><a href="https://apy-webapp.azurewebsites.net/">Hotel</a></li>
            <li ><a href="https://apy-webapp.azurewebsites.net/roomtype.php" class="ga" data-group="Navigation Click" data-id="Rooms &amp; Suites">Rooms &amp; Suites</a></li> 
            <li class="active"><a href="https://apy-webapp.azurewebsites.net/aboutus.php" class="ga" data-group="Navigation Click" data-id="About Us">About Us</a></li>
                        </ul>
                    </div><!-- /.main-nav -->
                    <br>
                    </div><!-- /.col 
	            </div><!-- /.row -->
	        </div><!-- /.container -->
	    </div><!-- /#header -->
</div>

<!--========================================= end of navi =============================================-->


<div class="content">
     
     <div class="block block-slideshow block-1 ">
                <div class="slider">
                <ul class="">
                                <li>
                        <div class="image" style="background-image: url(/img/aboutus/aboutus1.jpg);"></div><!-- /.image -->
                    </li>
                            </ul>
            </div><!-- /.slider -->
        
    </div><!-- /.block-slideshow -->       
    
    <!--========================================= end of slideshow =============================================-->             
    
    
    <div class="block block-inspiration block-2 ">
    
                <div class="container">
                    <div class="row">
    
                         <div class="col-sm-6 col-md-4 no-padding-right"> 
                            <div class="vertical-align">
                                <div class="color-box">
                                        <h2>Welcome</h2>
                                        <span><dd class="first">
                        						<strong>O</strong>cloud Hotel is  오클라우드호텔은<br>
                        						<strong>C</strong>onfident in service, 자신있게 서비스를 제공하고,<br>
                        						<strong>L</strong>oyal to customer, 고객에게 충성하며,<br>
                        						<strong>O</strong>pen-mined to change, 변화에 열려있고,<br>
                        						<strong>U</strong>nderstanding customer need, 고객의 니즈를 이해하여,<br>
                        						<strong>D</strong>oing our best with cloud nine experience. 오클라우드호텔에서 구름위에 있는듯한 경험을 하실 수 있도록 최선을 다하겠습니다.					
					                   </dd></span>
                                 </div><!-- /.color-box -->
                            </div><!-- /.vertical-align -->
                        </div><!-- /.col -->
    
                        <div class="col-sm-6 col-md-8 no-padding-left">
                                                        <div class="image" style="background-image: url('/img/aboutus/aboutus2.jpg');"></div>
                        </div><!-- /.col --> 
                    
                    </div><!-- /.row -->
                </div><!-- /.container --> 
    
    
    </div><!-- /.block-inspiration -->                      
    
    <!--========================================= end of block1 =============================================-->
    
    
    <div class="block block-inspiration block-3 ">
    
                <div class="container">
                    <div class="row">
    
                                <div class="col-sm-6 col-md-8 no-padding-right">
                                                    
                                        <div class="image" style="background-image: url('/img/aboutus/aboutus3.jpg');"></div>
                                       
                                </div><!-- /.col -->
    
                                <div class="col-sm-6 col-md-4 no-padding-left"> 
                                    <div class="vertical-align">
                                        <div class="color-box">
                                                                           
                                                <h2>Awards </h2>
                                                <span>호텔스닷컴 “Loved By Guest Award Excellent" 고객 평가 우수 호텔로 선정<br>
트립어드바이저 “2016 Travelers' Choice Winner" 한국 Top 24위 선정<br>
라쿠텐트래블 “2017 Award" 브론즈 수상<br>
호텔스닷컴 “Fabulous Hotel" 고객 평가 우수 호텔로 선정<br>
아고다 “2018 골든서클어워드” 베스트호텔 수상<br>
호텔스닷컴 "Love by Guests award WINNER 2018" 선정<br></span>
                                          
                                        </div><!-- /.color-box -->
                                    </div><!-- /.vertical-align -->
                                </div><!-- /.col -->
                        
                    
                    </div><!-- /.row -->
                </div><!-- /.container --> 
    
            </div><!-- /.block-inspiration -->                     
            
      <!--========================================= end of block2 =============================================-->
      
      
     <div class="block block-inspiration block-4 ">
    
                                        
                
                <div class="container">
                    <div class="row">
    
                                        <div class="col-sm-6 col-md-4 no-padding-right"> 
                            <div class="vertical-align">
                                <div class="color-box">
                                                                   
                                        <h2>Tourist Attractions</h2>
                                        <span>Ocloud Hotel is located between Gangnam Station and Sinnonhyeon Station. Located near Gangnamdaero ten-lane road as the gate to enter Gangbuk, Gangnam and southern parts of Seoul, it is the best location for you to enjoy shopping and tourism as well as major business affairs.</span>
                                   
                                                                </div><!-- /.color-box -->
                            </div><!-- /.vertical-align -->
                        </div><!-- /.col -->
    
                        <div class="col-sm-6 col-md-8 no-padding-left">
                                                   
                                <div class="image" style="background-image: url('/img/aboutus/aboutus4.jpg');"></div>
                           
                                                </div><!-- /.col --> 
                    
                    </div><!-- /.row -->
                </div><!-- /.container --> 
    
    
            </div><!-- /.block-inspiration -->                    
        
        
        
    </div>
    
    <!--=========== footer =======--> 

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">

                                        <p>
                        <span>Hotel</span>
                                                    +88-2-3480-8640
                                            </p>
                                        <p>
                        <span>Fax</span>
                                                    +88-2-3480-6500
                                            </p>
                                        <p>
                        <span></span>
                                                    
                                            </p>
                                        <p>
                        <span>Email</span>
                                                    <a href="mailto:resv@ocloudhotel.com">resv@ocloudhotel.com</a>
                                            </p>
                                        <p>
                        <span></span>
                                                    
                                            </p>
                                        <p>
                </div><!-- /.col -->
                <div class="col-sm-6">

                                        <p>
                        <span>Address</span>
                                                    Ocloud Hotel
                                                    12, Sapyeong-daero 58-gil, Seoul, KR
                                            </p>
                                       
                                        <p><span></span></p>
                    
                                                            
                </div><!-- /.col -->
               
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.footer -->
        
</body>
</html>
<!--========================================= end content =============================================-->