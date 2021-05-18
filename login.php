
<!DOCTYPE html>
<!-- Code By Webdevtrick ( https://webdevtrick.com )-->
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Sign-Up/Login</title>
  <link rel="icon" href="img/favicon.ico" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
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
</head>

<body>
  
  
<!-- NAV BAR -->

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
                                    echo '<a href="login.php" class="btn primary small active">Sign in</a>';
                             }
                             else{
                                 echo '<a href="bookinghistory.php" class="btn primary small">Booking History</a>';
                                 echo '<a href="logout.php" class="btn primary small">Sign out</a>';
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
                    <br>
                    </div><!-- /.col 
	            </div><!-- /.row -->
	        </div><!-- /.container -->
	    </div><!-- /#header -->
    
  </div>

<!--========================================= end of navi =============================================-->






<br><br><br>
<!-- Login Form -->
<div class="content">
  <div class="container">
    <div class="d-flex justify-content-center h-100">
      <div class="card" style="height:260px;width:450px;">
        <div class="card-header" style="height:60px;">
          <h3 class="pt-2 pl-2" style="font-size:25px;">Sign In</h3>
          <div class="d-flex justify-content-end social_icon">
          </div>
        </div>
        
        <div class="card-body">
         
            
              <div class="input-group form-group mt-3">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-user"></i></span>
                </div>
                <input type="email" id="email1" name="email1" value="" class="form-control" placeholder="email" style="font-size:13px;">
              </div>
            
            <div class="input-group form-group mt-4">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-key"></i></span>
              </div>
              <input type="password" id="password1" name="password" value=""class="form-control" placeholder="password" style="font-size:13px;">
            </div>
            <div class="form-group">
              <button style= "color:white;font-size:14px;" value="Login" class="mt-2 btn btn-success float-right login_btn" onclick="login()">Login</button>
            </div>
          
        </div>
        <div class="card-footer">
          <div class="d-flex justify-content-center links">
            Don't have an account ? <a href="#" data-toggle="modal" data-target="#myModal" class="pl-2">Sign Up</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  
 </div>

  <!-- ========================================================Sign up =================================================================================-->
  
  
  <!-- The Modal -->
  <br><br><br>
<div class="modal content" id="myModal" >
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title" style="font-size:25px;">Sign Up</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      
      
      <!-- Modal body -->
      <div class="modal-body">
              <div class="form1">
              
                  *Email:<br>
                  <input type="email" id="email" name="email" value="" class="form-control w-75" style="font-size:12px;" required ><br><br>
                  *Password:<br>
                  <input type="password" id="password" name="password" value="" class="form-control w-75 " style="font-size:12px; " required><br><br>
                  *Confirm Password:<br>
                  <input type="password" id="confirm" name="confirm" value="" class="form-control w-75 " style="font-size:12px; " required><br><br>
                  *Firstname:<br>
                  <input type="text" id="fname" name="fname" value="" class="form-control w-75" style="font-size:12px;" required  minlength="2" maxlength="100"><br><br>
                  *Lastname:<br>
                  <input type="text" id="lname" name="lname" value="" class="form-control w-75" style="font-size:12px;" required  minlength="2" maxlength="100"><br><br>
                  *Gender:<br>
                  <select id="gender" name="gender" required>
                    <option value="M" selected = "selected">Male</option>
                    <option value="F">Female</option>
                  </select><br><br><br>
                  *Id Card:<br>
                  <input type="text"  id="idcard" name="idcard" value="" class="form-control w-75" style="font-size:12px;" required minlength="13" maxlength="13"><br><br>
                  *Address:<br>
                  <input type="text" id="address" name="address" value="" class="form-control w-75" style="font-size:12px;" required><br><br>
                  *Telephone:<br>
                  <input type="tel" id="telephone" name="telephone" value="" class="form-control w-75" style="font-size:12px;"required minlength="10" maxlength="10"><br><br>
                  <button name="reg_user" style="font-size:14px;" class="btn btn-primary" onclick="submit()" >Confirm</button>
                  <button type="button" style="font-size:14px;" class="btn btn-danger" data-dismiss="modal">Close</button>
             
              </div>
      </div>
     
    </div>
  </div>
</div>


</div>


<script>
  function result()
{
 
  var password = document.forms["form"]["password"].value;
  var confirm = document.forms["form"]["confirm"].value;
  var patternpassword=/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/;

  if (confirm != password)
  {
    alert("Your Password And Confirmation Password Do Not Match")
    return false;
  }
  else if (!pwd.match(patternpassword))
  {
    alert("more than/equal to 8 characters and a least one uppercase,one lowercase,one number")
  }
  else
  {
    alert("You Have Been Registered")
  }
  
}
</script>
<script>
  function login() {
    $.post('/database/test_login.php', {
			'email' : $('#email1').val(),
			'password' : $('#password1').val()
		}, function(result){ //callback
			console.log(result);
			alert(result);
			if (result == 'fail') {
				alert('incorrect username or password');
			} else if (result == 'success') {
				location.assign('index.php');
			}
		})
  }
  
  
	function submit() {
     var email= $('#email').val();
      var firstname = $('#fname').val();
			var lastname = $('#lname').val();
     var  gender = $('#gender').val();
			var idcard = $('#idcard').val();
      var address = $('#address').val();
			var telephone = $('#telephone').val();
     var password = $('#password').val();
     var confirm = $('#confirm').val();
     var patternpassword=/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/;

     if (confirm != password)
      {
    alert("Your Password And Confirmation Password Do Not Match");
    return false;
      }
    else if (!password.match(patternpassword))
    {
    alert("more than/equal to 8 characters and a least one uppercase,one lowercase,one number");
      }
      else if (email == ''|| firstname == '' || lastname == '' || gender =='' ||idcard == '' || address =='' || telephone =='' || password == '' || confirm =='' )
      {
        alert("Please fill in every field");
      }
      else if (idcard.toString().length != 13)
      {
        alert("Id Card Length Must Be 13");
      }
      else if (telephone.toString().length != 10)
      {
        alert("Telephone Length Must Be 10");
      }
    else
    {
    $.post('/database/signup.php', {
			'email' : $('#email').val(),
			'password' : $('#password').val(),
      'firstname' : $('#fname').val(),
			'lastname' : $('#lname').val(),
      'gender' : $('#gender').val(),
			'idcard' : $('#idcard').val(),
      'address' : $('#address').val(),
			'telephone' : $('#telephone').val()
		}, function(result){ //callback
			console.log(result);
			if (result == 'fail') {
				alert('this emaill already use');
			}
       else if (result == 'success') {
        alert('signup success');
				location.assign('index.php');
			}
		})
    }
		
	}	
</script>
</body>

</html>