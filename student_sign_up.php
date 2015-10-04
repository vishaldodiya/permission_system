<?php
session_start();
?>
<!DOCTYPE html>

<html lang="en">
<head>
  <title>Student Signup</title>
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
    
 <script>
   

     function validatePassword(){
         
          var password = document.getElementById("pw");
         var confirm_password = document.getElementById("cpw");
        if(password.value != confirm_password.value) {
            confirm_password.setCustomValidity("Passwords Don't Match");
        } else {
            confirm_password.setCustomValidity('');
        }
     }

     
 </script>
    
</head>
<body>
    
    
    <div class="head">
        <?php
        	
            include "navigation.php";
        ?>
    </div>
    
<div class="container">
                
                <form action="./php/php_signup.php" id="sky-form1" class="sky-form" method="get">
                    <header>Student Signup</header>
                   <center>
                   
                        <div class="row">
                            <section class="col col-6">
                                <label class="input">
                                    <i class="icon-prepend fa fa-user"></i>
                                    <input type="text" name="fname_txt" placeholder="First name" required>
                                </label>
                            </section>
                            <section class="col col-6">
                                <label class="input">
                                    <i class="icon-prepend fa fa-user"></i>
                                    <input type="text" name="lname_txt" placeholder="Last name" required>
                                </label>
                            </section>
                        </div>
                        
                        <div class="row">
                            <section class="col col-6">
                                <label class="input">
                                    <i class="icon-prepend fa fa-user"></i>
                                    <input type="text" name="roll_no_txt" placeholder="Enter Roll No"  pattern="(d).{2}+([a-z]).{3}+(d).{3}" required>
                                </label>
                            </section>
                            <section class="col col-6">
                                <label class="input">
                                    <i class="icon-prepend fa fa-phone"></i>
                                    <input type="tel" name="mno_txt" placeholder="Enter Mobile Number" pattern="[0-9]{10}" required>
                                </label>
                            </section>
                        </div>
						
						<div class="row">
							<section class="col col-6">
								<label class="select">
									<select name="gender" required>
										<option value="0" selected disabled>Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
									</select>
									<i></i>
								</label>
							</section>
							<section class="col col-6">
								<label class="select">
									<select name="ops" required>
										<option value="Department" selected disabled>Department</option>
                                        <option value="ITNU">ITNU</option>
                                        <option value="ITMU">ITMU</option>
										<option value="ITLU">ITLU</option>
										<option value="Pharmacy">Pharmacy</option>
									</select>
									<i></i>
								</label>
							</section>
						</div>
						
						<div class="row">
							<section>
								<label class="label">Address</label>
								<label class="input">
									<i class="icon-prepend fa fa-home"></i>
									<input type="text" name="add_txt" placeholder="Enter your Address" required>
								</label>
							</section>
						</div>
						
						<div class="row">
							<section>
								<label class="label">Email Id</label>
								<label class="input">
									<i class="icon-prepend fa fa-home"></i>
									<input type="email" name="email_txt" placeholder="Enter Email Id" required>
								</label>
							</section>
						</div>
						
						
						
						<div class="row">
							<section class="col col-6">
                                <label class="input">
                                    <i class="icon-prepend fa fa-lock"></i>
                                    <input type="password" name="pw" id="pw" placeholder="Password" id="password" onchange="validatePassword();" required>
                                    <b class="tooltip tooltip-bottom-right">Don't forget your password</b>
                                </label>
                            </section>
                                
                            <section class="col col-6">
                                <label class="input">
                                    <i class="icon-prepend fa fa-lock"></i>
                                    <input type="password" name="cpw" id="cpw" placeholder="Confirm password" onkeyup="validatePassword();" required>
                                    <b class="tooltip tooltip-bottom-right">Don't forget your password</b>
                                </label>
                            </section>
							<center><input type="submit" class="btn-u btn-u-blue pulse-grow" value="Submit"></center>
							
						</div>
                    </fieldset>
</div>
                    
    
                   
</body>
</html>