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
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
  
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
            <li class="active"><a href="https://apy-webapp.azurewebsites.net/">Hotel</a></li>
            <li ><a href="https://apy-webapp.azurewebsites.net/roomtype.php" class="ga" data-group="Navigation Click" data-id="Rooms &amp; Suites">Rooms &amp; Suites</a></li> 
            <li ><a href="https://apy-webapp.azurewebsites.net/aboutus.php" class="ga" data-group="Navigation Click" data-id="About Us">About Us</a></li>
                        </ul>
                    </div><!-- /.main-nav -->
                    </div><!-- /.col 
	            </div><!-- /.row -->
	        </div><!-- /.container -->
	    </div><!-- /#header -->    
  </div>

<!--========================================= end of navi =============================================-->


<!--=========================================start content =============================================-->
 <div class="content">
              <div class="block block-slideshow block-1 collapse">
            <div class="slider">
            <ul class="bxslider">
                            <li>
                    <div class="image" style="background-image: url(/img/view/view2.jpg);"></div><!-- /.image -->
                </li>
                            <li>
                    <div class="image" style="background-image: url(/img/view/view3.jpg);"></div><!-- /.image -->
                </li>
                        </ul>
            </div><!-- /.slider -->
        
        
        
        
   <!--======== end of slider =====-->
         <div class="booking-widget-horizontal block block-2">
           <div class="container">
              <div class="row">
               <div class="col-sm-12">
                    
                <div class="widget-body booking-widget">

                    <form method="GET" action="https://apy-webapp.azurewebsites.net/booking.php " name="form" target="_blank">

                    <div class="date-box check-in">
                        <h6>Check in</h6>
                        <input type="text" id = "arrive" name="arrive"  placeholder="Check in" class="default-field date calendar full-width arrival dateFrom" data-date-format="yyyy-mm-dd"/>
                    </div>
                    <div class="date-box check-out">
                        <h6>Check out</h6>
                        <input type="text"id = "depart" name="depart" placeholder="Check out" class="default-field date calendar full-width departure dateTo" data-date-format="yyyy-mm-dd" />
                    </div><!-- /.date-box  -->

                    

                   
                    
                    <div class="submit-box">
                        <input href="https://apy-webapp.azurewebsites.net/booking.php"  class="btn primary large full-width" name="submit" value="Book now" type="submit"/>
                    </div><!-- /.submit-box -->
                    
                </div><!-- /.widget-body -->

                </form>

                <div class="extra-info">
                    <ul>
                                                <li class="bullet">*Prime city centre location</li>
                                                <li class="bullet">*Contemporary luxury hotel</li>
                                                <li class="bullet">*24 hours room service</li>
                                                <li class="bullet">*Hot spot restaurant Table Nine</li>
                                            </ul>
                </div><!-- /.extra-info -->

                                            </div><!-- /.col -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </div><!-- /.booking-widget-horizontal -->
                    
  <!--=========end of booking ==========-->
                    
    <div class="block block-inspiration block-3 ">

                                    
            
            <div class="container">
                <div class="row">

                    <div class="col-sm-6 col-md-8 no-padding-right">
                            <div class="image" style="background-image: url('/img/home/restaurant1.jpg');"></div>
                        
                    </div><!-- /.col -->

                    <div class="col-sm-6 col-md-4 no-padding-left"> 
                        <div class="vertical-align">
                            <div class="color-box">
                                                               
                                    <h2>Table Nine Restaurant</h2>
                                    <span>Table Nine provides excellent cuisine made with fresh ingredients to be enjoyed in delightful atmosphere of reasonable price.</span>
                                
                            </div><!-- /.color-box -->
                        </div><!-- /.vertical-align -->
                    </div><!-- /.col -->
                    
                
                </div><!-- /.row -->
            </div><!-- /.container --> 


        </div><!-- /.block-inspiration --> 
        
  <!--=======end of block inspo 1  ========-->

  <!--==========  block inspo 2  ========-->
        <div class="block block-inspiration block-4 ">

                                    
            
            <div class="container">
                <div class="row">

                                    <div class="col-sm-6 col-md-4 no-padding-right"> 
                        <div class="vertical-align">
                            <div class="color-box">
                                                              
                                    <h2>Rooftop Garden</h2>
                                    <span>Our rooftop garden in the heart of the city to bring you a solace and a relaxation</span>
                              
                                                            </div><!-- /.color-box -->
                        </div><!-- /.vertical-align -->
                    </div><!-- /.col -->

                    <div class="col-sm-6 col-md-8 no-padding-left">
                                              
                            <div class="image" style="background-image: url('/img/home/garden.jpg');"></div>
                        
                                            </div><!-- /.col --> 
                
                </div><!-- /.row -->
            </div><!-- /.container --> 


        </div><!-- /.block-inspiration -->   

  <!--======== end of block inspo 2  ============--> 
  
  
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
       
        
   </div> <!-- /.site --> 
   
 <script> 
$(document).ready(function() {
    $('.booking-widget').each(function(i) {

        var _this = $(this);
        var _arrival = _this.find('.arrival');
        var _departure = _this.find('.departure');
        var _nights = _this.find('.nights');

        $(_arrival).datepicker({
                                autoclose: true,
                                todayHighlight: true,
                                weekStart: 1,
                                language: 'en'
                                })
                                .on('changeDate', function(e){

                                    // Get arrival date, add +1 day and add to departure date
                                    var date = new Date(e.format([0], 'yyyy-mm-dd'));
                                    var newDate = date.setDate(date.getDate() + 1);
                                    _departure.val($.format.date(newDate, 'yyyy-MM-dd'));

                                    // Set minDate
                                    _departure.datepicker('setStartDate', $.format.date(newDate, 'yyyy-MM-dd'));
                                });

        $(_departure).datepicker({
                                autoclose: true,
                                todayHighlight: true,
                                weekStart: 1,
                                language: 'en'
                                });

      // $(this).demandCheck({target: "_blank"});
    });

});
</script>
     
</body>
</html>