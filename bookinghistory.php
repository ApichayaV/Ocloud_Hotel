<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Ocloud Hotel Seoul</title>
        <link rel="icon" href="img/icon/ocloud-icon.png" />
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <!--Fontawesome CDN-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Manjari&family=Kanit&family=Sarabun&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="css/login.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
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
            <li><a href="https://apy-webapp.azurewebsites.net/">Hotel</a></li>
            <li ><a href="https://apy-webapp.azurewebsites.net/roomtype.php" class="ga" data-group="Navigation Click" data-id="Rooms &amp; Suites">Rooms &amp; Suites</a></li> 
            <li ><a href="https://apy-webapp.azurewebsites.net/aboutus.php" caass="ga" data-group="Navigation Click" data-id="About Us">About Us</a></li>
                        </ul>
                    </div><!-- /.main-nav -->
                    <br>
                    </div><!-- /.col 
	            </div><!-- /.row -->
	        </div><!-- /.container -->
	    </div><!-- /#header -->
        
	
	  
		      
	
	    <div id="sticky" class="mobile-header visible-xs visible-sm">
	        <div class="logo">
	            <a href="https://nobishotel.se/en/"><img src="/assets/layout/svg/NH-STHLM_Logo_vit.svg?id=1" alt="Nobis Hotel Stockholm" /></a>
	        </div><!-- /.logo -->
	
	        <div class="language-switcher">
	                                            <a href="/">
	                    <img src="/assets/layout/flag-sv.png" alt="" /><br />
	                    <span>Svenska</span>
	                </a>
	                                                                </div><!-- /.language-switcher -->
	
	        <div class="mobile-icon visible-xs visible-sm">
	            <div class="nav-icons">
	                <a href="#" class="btn-toggle" data-show="mobile-nav" data-hide="site"><img src="/assets/layout/icon-mobile-nav-w.png" alt="" /></a>
	            </div><!-- /.nav-icons -->
	        </div><!-- /.mobile-icon -->
	    </div><!-- /#sticky.mobile-header -->
  </div>

<!--========================================= end of navi =============================================-->

<div class="content container">
    <table class="table">
    <thead>
      <tr>
        <th>Room ID</th>
        <th>Room Type</th>
        <th>Price</th>
        <th>Guest Limit</th>
        <th>Check In</th>
        <th>Check Out</th>
      </tr>
    </thead>
    <tbody id="table">
    </tbody>
  </table>
  
   <div class="btns">
       <button onclick= "cancel()" target="_blank" class="btn primary medium" style="float:right;">Cancel</button>
       <input value="" type="text" id="room_id" name="room_id" style="font-size:12px;float:right;margin-right:12px;margin-top:4px;" required>
   </div><!-- /.btns -->
</div>



</body>
</html>
<script>
	
	$.get('/database/booking_history.php', function(data) {
		data = JSON.parse(data);
        if (data.length > 0) {
            data.forEach(element => {
    			$('#table').append('<tr><td>' + element.room_id + '</td><td>' + element.room_type_names + '</td><td>' + element.price + '</td><td>' + element.guest_limit + '</td><td>' + element.check_in_date + '</td><td>' + element.check_out_date + '</td></tr>');
    		});
        } else {
            $('#table').append('<tr><td>no booking history</td></tr>');
        }
	});
	
	
	
    function cancel() {
    $.post('/database/booking_delete.php', {
			'room_id' : $('#room_id').val()
            
		}, function(result){
            alert('Please refresh to see the updated version')
        })
    
    }
</script>