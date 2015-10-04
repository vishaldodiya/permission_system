<!DOCTYPE html>
<html lang="en">
<head>
  <title>Auditorium Booking</title>
  <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="assets/plugins/line-icons/line-icons.css">
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/plugins/sky-forms/version-2.0.1/css/custom-sky-forms.css">
    <!--[if lt IE 9]>
        <link rel="stylesheet" href="css/sky-forms-ie8.css">
    <![endif]-->

    <!-- CSS Theme -->    
    <link rel="stylesheet" href="assets/css/themes/default.css" id="style_color">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="assets/css/custom.css">
	<style>
		h1{
		font-size:50px;
		}
        
	</style>
</head>
<body>
   <div class="header">
	<div class="row">
		<div class="col-sm-2">
			<img src="logo.png" width="50%" height="50%">
		</div>
		<div class="col-sm-7">
		</br>
		<h1>Application System</h1>
		</div>
		 <div class="top_right_header col-sm-3">
		<?php

		if(isset($_SESSION['first_name']))
		{?>
			
		<ul style="list-style-type:none" class="navbar-nav">
  			<li style="display:inline">Hi,<?php echo $_SESSION["first_name"];?></li>
  			<li>&nbsp;&nbsp;</li>
  			<li style="display:inline" class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">Settings</a>
  				<ul class="dropdown-menu">
  					<li><a href="edit_profile.php">Edit-profile</a></li>
  					<li><a href="change_password.php">Change password</a></li>
  					<li><a href="booking_history.php">Booking History</a></li>
  					<li><a href="#">Check for Availability</a></li>
  					<li><a href="/application_system/php/logout.php">Logout</a></li>
  				</ul>
  			</li>
  		</ul>
  		<?php
		}
		else{
			echo "<a href='login.php'>Login</a>&nbsp;&nbsp;";
			echo "<a href='signup.php'>signup</a>";
		}
			
		?>
			
		
		
		
		</div>
	</div>
   </div>
   
         
			<nav class="navbar navbar-default" role="navigation">
			<div class="container-fluid">
			 <div class="container-fluid">
                <ul style="text-align:center" class="nav navbar-nav">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="about.html">About</a>
                    </li>
                     <li>
                        <a href="new_permission.php">New Permission</a>
                    </li>
				</ul>
				
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	</body>
	</html>