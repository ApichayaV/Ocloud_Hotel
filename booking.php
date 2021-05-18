<?php
session_start();
    if (!isset($_SESSION['customer'])) {
        header('location: login.php');
    }
 ?>
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
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
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
            <li><a href="https://apy-webapp.azurewebsites.net/">Hotel</a></li>
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
                <!--<ul class="items">
            	            		<li style="color:white"><a style="pointer-events: none;" onclick="return false;"><u>1.select dates and room</u> ></a></li>
            	            		<li style="color:white"><a style="pointer-events: none;" onclick="return false;">2.Add details and confirm ></a></li>
            	                </ul>-->
           
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.block-room-nav -->
        <!--========================select date ============================================-->
          <div class="booking-widget-horizontal block block-2">
                        <div class="container">
                            </br></br>
                            <h1>Select Date </h1>
                            <div class="row">
                                <div class="col-sm-12">
                    
                <div class="widget-body booking-widget">

                    <form method="GET" action="https://apy-webapp.azurewebsites.net/roomtype.php" name="form" target="_blank">
                
                    <div class="date-box check-in">
                        <h6>Check in</h6>
                        <input type="text" id = "arrive" name="arrive" placeholder="Check in" class="default-field date calendar full-width arrival dateFrom" data-date-format="yyyy-mm-dd" value="<?= $_GET['arrive'] ?>"/>
                    </div>
                    <div class="date-box check-out">
                        <h6>Check out</h6>
                        <input type="text" id="depart" name="depart" placeholder="Check out" class="default-field date calendar full-width departure dateTo" data-date-format="yyyy-mm-dd"value="<?= $_GET['depart'] ?>"/>
                    </div><!-- /.date-box  -->
                   

                    

                    
                    
                    

                </form>
                                            </div><!-- /.col -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </div><!-- /.booking-widget-horizontal -->
            <!--=====================end of booking =========================================-->
        
<div class="room-list">
    <div class="container ">
         <h1>Select Room </h1>
         <h4 style="color:red">You can only book 1 room at a time</h4>
        
        
       
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
                            <p><strong>Guests</strong>:  <img style="height:17px;width:15px;" src="/img/icon/icon-person-black.png" alt="" />  <img style="height:17px;width:15px;" src="/img/icon/icon-person-black.png" alt="" /></p>
                        </div><!-- /.text-default-format -->
                    </div><!-- /.room-info -->
            </div><!-- /.col -->

            <div class="col-md-3 col-sm-12 no-padding">
                    <div class="room-cta">
                        <div class="guests">
                            <div class="row">
                            <div class="col-md-5">
                            <h3></br>69,000</h3>  </div> 
                            <div class="col-md-7" style="text-align:left">
                            <h5></br>KRW/ Night </br>Including Taxes and Fees</h4> </div>   
                            </div>     
                        </div><!-- /.guests -->
                         <div class="btns">
                            <button onclick= "confirmbooking(1)" target="_blank" class="btn primary large" style="float:right;">Select</button>
                        </div><!-- /.btns -->
                        
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
                            <p><strong>Guests</strong>:   <img style="height:17px;width:15px;" src="/img/icon/icon-person-black.png" alt="" />  <img style="height:17px;width:15px;" src="/img/icon/icon-person-black.png" alt="" /></p>
                        </div><!-- /.text-default-format -->
                    </div><!-- /.room-info -->
            </div><!-- /.col -->

            <div class="col-md-3 col-sm-12 no-padding">
                    <div class="room-cta">
                         <div class="guests">
                            <div class="row">
                            <div class="col-md-5">
                            <h3></br>79,000</h3>  </div> 
                            <div class="col-md-7" style="text-align:left">
                            <h5></br>KRW/ Night </br>Including Taxes and Fees</h4> </div>   
                            </div>     
                        </div><!-- /.guests -->
                       <div class="btns">
                            <button onclick= "confirmbooking(2)" target="_blank" class="btn primary large" style="float:right;">Select</button>
                        </div><!-- /.btns -->
                    
              
                        
                    </div><!-- /.room-cta -->
            </div><!-- .col -->
            </div><!-- /.box -->
        </div><!-- /.row -->
        
        
                                        <!--==. Family Suite ==-->
                <div class="row ">
            <div class="box">

            <div class="col-md-3 col-sm-6 no-padding">

                                <div class="image">
                    <a class="fancybox" rel="room-FamSuite" href="/img/famsuite/famSuite1.jpg">
                        <img  src="/img/famsuite/famSuite1.jpg" alt="" class="img-responsive" style="height:204px;width:284px;" />
                        <div class="magnifier"></div><!-- /.magnifier -->
                    </a>
                </div><!-- /.image -->

                <div class="hidden-images3">
                                    <a  href="/img/famsuite/famSuite2.jpg"  class="fancybox" rel="room-FamSuite"></a>
                                    <a href="/img/famsuite/famSuite3.jpg" class="fancybox" rel="room-FamSuite"></a>
                                    <a href="/img/famsuite/famSuite4.jpg" class="fancybox" rel="room-FamSuite"></a>
                                    <a href="/img/famsuite/famSuite5.jpg" class="fancybox" rel="room-FamSuite"></a>
                                    
                                </div><!-- /.hidden-images -->

                                            
            </div><!-- /.col -->
            <div class="col-sm-6">
                    <div class="room-info">
                        <h3 style="color:black">Family Suite</h3>
                         <div class="text-default-format">
                             <p>A place for unforgettable memory together with with the people you love.</p>
                            <p> <strong>Detail</strong>: 1 King Bed, 1 Double bed, 1 Sofa, 2 TV, 1 Dining Table</p>                          
                            <p><strong>Area</strong>: 51.75 m²</p>
                            <p><strong>Guests</strong>:   <img style="height:17px;width:15px;" src="/img/icon/icon-person-black.png" alt="" />  <img style="height:17px;width:15px;" src="/img/icon/icon-person-black.png" alt="" />  <img style="height:17px;width:15px;" src="/img/icon/icon-person-black.png" alt="" />  <img style="height:17px;width:15px;" src="/img/icon/icon-person-black.png" alt="" /></p>
                        </div><!-- /.text-default-format -->
                    </div><!-- /.room-info -->
            </div><!-- /.col -->

            <div class="col-md-3 col-sm-12 no-padding">
                    <div class="room-cta">
                        <div class="guests">
                            <div class="row">
                            <div class="col-md-5">
                            <h3></br>210,000</h3>  </div> 
                            <div class="col-md-7" style="text-align:left">
                            <h5></br>KRW/ Night </br>Including Taxes and Fees</h4> </div>   
                            </div>     
                        </div><!-- /.guests -->
                        
                        
                        <div class="btns">
                            <button onclick= "confirmbooking(3)" target="_blank" class="btn primary large" style="float:right;">Select</button>
                        </div><!-- /.btns -->
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
                            <p><strong>Guests</strong>:  <img style="height:17px;width:15px;" src="/img/icon/icon-person-black.png" alt="" />  <img style="height:17px;width:15px;" src="/img/icon/icon-person-black.png" alt="" /></p>
                        </div><!-- /.text-default-format -->
                    </div><!-- /.room-info -->
            </div><!-- /.col -->

            <div class="col-md-3 col-sm-12 no-padding">
                    <div class="room-cta">
                         <div class="guests">
                            <div class="row">
                            <div class="col-md-5">
                            <h3></br>170,000</h3>  </div> 
                            <div class="col-md-7" style="text-align:left">
                            <h5></br>KRW/ Night </br>Including Taxes and Fees</h4> </div>   
                            </div>     
                        </div><!-- /.guests -->
                       <div class="btns">
                            <button onclick= "confirmbooking(4)" target="_blank" class="btn primary large" style="float:right;">Select</button>
                        </div><!-- /.btns -->
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


function confirmbooking(room_type_id) {
    $.post('/database/booking_.php', {
			'arrive' : $('#arrive').val(),
			'depart' : $('#depart').val(),
            'room_type_id' : room_type_id
		}, function(result){
            alert(result);
        })
    
}
</script>
</body>
</html>