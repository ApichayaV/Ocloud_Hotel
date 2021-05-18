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
            <li class="active"><a href="https://apy-webapp.azurewebsites.net/roomtype.php" class="ga" data-group="Navigation Click" data-id="Rooms &amp; Suites">Rooms &amp; Suites</a></li> 
            <li ><a href="https://apy-webapp.azurewebsites.net/aboutus.php" class="ga" data-group="Navigation Click" data-id="About Us">About Us</a></li>
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
        
<div class="block-room-nav block block-">
    <div class="container">
        <div class="row">

                <div class="toolbar visible-xs visible-sm">
                    <a href="javascript:void(0);" class="btn-toggle-slide" data-toggle="items">
                        <span class="pull-left">Rooms &amp; Suites</span>
                        <span class="pull-right">Change page</span>
                    </a>
                </div><!-- /.top -->
                <ul class="items">
            	            		<li style="color:white"><a style="pointer-events: none;" onclick="return false;">Stardard Double</a></li>
            	            		<li style="color:white"><a style="pointer-events: none;" onclick="return false;">Deluxe Twin</a></li>
            	            		<li style="color:white"><a style="pointer-events: none;" onclick="return false;">Family Suite</a></li>
            	            		<li style="color:white"><a style="pointer-events: none;" onclick="return false;">Ocloud Suite</a></li>
            	                </ul>
           
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.block-room-nav -->
        
<div class="room-list">
    <div class="container ">
        
        
       
                                                <!--== Standard ==-->
        <div class="row ">
            <div class="box">

            <div class="col-md-3 col-sm-6 no-padding">

                                <div class="image">
                    <a class="fancybox" rel="room-std" href="/img/stardardroom/stdDouble1.jpg">
                        <img  src="/img/stardardroom/stdDouble1.jpg" alt="" class="img-responsive" style="height:204px;width:284px;" />
                        <div class="magnifier"></div><!-- /.magnifier -->
                    </a>
                </div><!-- /.image -->

                <div class="hidden-images1">
                                    <a  href="/img/stardardroom/stdDouble2.jpg"  "class="fancybox" rel="room-std"></a>
                                    <a href="/img/stardardroom/stdDouble3.jpg" class="fancybox" rel="room-std"></a>
                                    
                                </div><!-- /.hidden-images -->

                
            </div><!-- /.col -->
            <div class="col-sm-6">
                    <div class="room-info">
                        <h3 style="color:black">Standard Double</h3>
                         <div class="text-default-format">
                             <p>This room provides coziness in its modern space</p>
                            <p> <strong>Detail</strong>: 1 Double Bed, 1 Bathroom </p>                          
                            <p><strong>Area</strong>: 21.40 m²</p>
                        </div><!-- /.text-default-format -->
                    </div><!-- /.room-info -->
            </div><!-- /.col -->

            <div class="col-md-3 col-sm-12 no-padding">
                    <div class="room-cta">
                        <div class="guests">
                            </br></br>
                            <img src="/img/icon/icon-person.png" alt="" />
                            <img src="/img/icon/icon-person.png" alt="" />
                            
                            <h6></br> Up to 2 guests</h6>           
                        </div><!-- /.guests -->
                        
                    </div><!-- /.room-cta -->
            </div><!-- .col -->
            </div><!-- /.box -->
        </div><!-- /.row -->
        
        
        
                                   <!--== Delux Twin ==-->
                <div class="row ">
            <div class="box">

            <div class="col-md-3 col-sm-6 no-padding">

                                <div class="image">
                    <a class="fancybox" rel="room-DeluxeTwin" href="/img/deluxetwin/delTwin1.jpg">
                        <img  src="/img/deluxetwin/delTwin1.jpg" alt="" class="img-responsive" style="height:204px;width:284px;" />
                        <div class="magnifier"></div><!-- /.magnifier -->
                    </a>
                </div><!-- /.image -->

                <div class="hidden-images2">
                                    <a  href="/img/deluxetwin/delTwin2.jpg"  "class="fancybox" rel="room-DeluxeTwin"></a>
                                    <a href="/img/deluxetwin/delTwin3.jpg" class="fancybox" rel="room-DeluxeTwin"></a>
                                    
                                </div><!-- /.hidden-images -->

                
            </div><!-- /.col -->
            <div class="col-sm-6">
                    <div class="room-info">
                        <h3 style="color:black">Deluxe Twin</h3>
                         <div class="text-default-format">
                             <p>This sophisticated space makes you feel like a home.</p>
                            <p> <strong>Detail</strong>: Detail 2 Single beds, 1 Bathroom</p>                          
                            <p><strong>Area</strong>: 29.40 m²</p>
                        </div><!-- /.text-default-format -->
                    </div><!-- /.room-info -->
            </div><!-- /.col -->

            <div class="col-md-3 col-sm-12 no-padding">
                    <div class="room-cta">
                        <div class="guests">
                            </br></br>
                            <img src="/img/icon/icon-person.png" alt="" />
                            <img src="/img/icon/icon-person.png" alt="" />
                            </br>
                            <h6></br> Up to 2 guests</h6>
                                                            
                        </div><!-- /.guests -->
                    
                        
              
                        
                    </div><!-- /.room-cta -->
            </div><!-- .col -->
            </div><!-- /.box -->
        </div><!-- /.row -->
        
        
                                        <!--==. Family Suite ==-->
                <div class="row ">
            <div class="box">

            <div class="col-md-3 col-sm-6 no-padding">

                                <div class="image">
                    <a class="fancybox" rel="room-Famsuite" href="/img/famsuite/famSuite1.jpg">
                        <img  src="/img/famsuite/famSuite1.jpg" alt="" class="img-responsive" style="height:204px;width:284px;" />
                        <div class="magnifier"></div><!-- /.magnifier -->
                    </a>
                </div><!-- /.image -->

                <div class="hidden-images3">
                                    <a  href="/img/famsuite/famSuite2.jpg"  class="fancybox" rel="room-Famsuite"></a>
                                    <a href="/img/famsuite/famSuite3.jpg" class="fancybox" rel="room-Famsuite"></a>
                                    <a href="/img/famsuite/famSuite4.jpg" class="fancybox" rel="room-Famsuite"></a>
                                    <a href="/img/famsuite/famSuite5.jpg" class="fancybox" rel="room-Famsuite"></a>
                                    
                                </div><!-- /.hidden-images -->

                                            
            </div><!-- /.col -->
            <div class="col-sm-6">
                    <div class="room-info">
                        <h3 style="color:black">Family Suite</h3>
                         <div class="text-default-format">
                             <p>A place for unforgettable memory together with with the people you love.</p>
                            <p> <strong>Detail</strong>: 1 King Bed, 1 Double bed, 1 Sofa, 2 TV, 1 Dining Table</p>                          
                            <p><strong>Area</strong>: 51.75 m²</p>
                        </div><!-- /.text-default-format -->
                    </div><!-- /.room-info -->
            </div><!-- /.col -->

            <div class="col-md-3 col-sm-12 no-padding">
                    <div class="room-cta">
                        <div class="guests">
                            </br></br>
                            <img src="/img/icon/icon-person.png" alt="" />
                            <img src="/img/icon/icon-person.png" alt="" />
                            <img src="/img/icon/icon-person.png" alt="" />
                            <img src="/img/icon/icon-person.png" alt="" />
                            <h6></br>Up to 4 guests</h6>            
                        </div><!-- /.guests -->
                        
                       
                        
                    </div><!-- /.room-cta -->
            </div><!-- .col -->
            </div><!-- /.box -->
        </div><!-- /.row -->
        
        
        
                                                     <!--== Ocloud Suite  ==-->
                <div class="row ">
            <div class="box">

            <div class="col-md-3 col-sm-6 no-padding">

                                <div class="image">
                    <a class="fancybox" rel="room-OcloudSuite" href="/img/Ocloudsuite/ocloudSuite1.jpg">
                        <img  src="/img/Ocloudsuite/ocloudSuite1.jpg" alt="" class="img-responsive" style="height:204px;width:284px;" />
                        <div class="magnifier"></div><!-- /.magnifier -->
                    </a>
                </div><!-- /.image -->

                <div class="hidden-images4">
                                    <a  href="/img/Ocloudsuite/ocloudSuite2.jpg"  class="fancybox" rel="room-OcloudSuite"></a>
                                    <a href="/img/Ocloudsuite/ocloudSuite3.jpg" class="fancybox" rel="room-OcloudSuite"></a>
                                    <a href="/img/Ocloudsuite/ocloudSuite4.jpg" class="fancybox" rel="room-OcloudSuite"></a>
                                    
                                </div><!-- /.hidden-images -->

                
            </div><!-- /.col -->
            
            <div class="col-sm-6">
                    <div class="room-info">
                        <h3 style="color:black">Ocloud Suite</h3>
                         <div class="text-default-format">
                             <p>Beginning the day with elegance and relaxation</p>
                            <p> <strong>Detail</strong>: 1 Double Bed, 1 Sofa, 2 TV, 1 Dining Table</p>                          
                            <p><strong>Area</strong>: 51.75 m²</p>
                        </div><!-- /.text-default-format -->
                    </div><!-- /.room-info -->
            </div><!-- /.col -->

            <div class="col-md-3 col-sm-12 no-padding">
                    <div class="room-cta">
                        <div class="guests">
                            </br></br>
                            <img src="/img/icon/icon-person.png" alt="" />
                            <img src="/img/icon/icon-person.png" alt="" />
                            <h6> </br>Up to 2 guests</h6>
                                                            
                        </div><!-- /.guests -->
                     
                       
                        
                    </div><!-- /.room-cta -->
            </div><!-- .col -->
            </div><!-- /.box -->
        </div><!-- /.row -->
        </div><!-- /.container -->
</div><!-- /.room-list -->
<!-- ==========end of room list =========-->

    </div><!-- /.content -->
    
  <!--====================================== footer ================================================--> 
    <div class="footer">
        <div class="container">
            
            <div class="row">
                <div class="col-sm-2"> </div>
                <div class="col-sm-4">

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
</div><!-- /#site -->
</body>
</html>