<!DOCTYPE html>
<html lang="en">
<head>
  <title>Change Password</title>
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
         
          var password = document.getElementById("new_pw");
         var confirm_password = document.getElementById("new_cpw");
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
        	session_start();
            include "navigation.php";
        ?>
    </div>
    
<div class="container" style="width:50%;margin-top:100px">
	<form action="./php/php_change_password.php" id="sky-form" class="sky-form">
        <header>Change Password</header>
		<div class="row">
			<section style="width:94%; margin-left:15px">
				
				<label class="input">Enter password:</label><label class="input">
					<i class="icon-prepend glyphicon glyphicon-lock"></i>
					<input type="password" name="old_pw" placeholder="password" required>
				</label>
			</section>
		</div>
		<div class="row">
			<section class="col col-6">
				
				<label class="input">Enter new password:</label><label class="input">
					<i class="icon-prepend glyphicon glyphicon-lock"></i>
					<input type="password" name="new_pw" id="new_pw" placeholder="password" onchange="validatePassword();" required>
				</label>
			</section>
			<section class="col col-6">
				<br><label class="input"></label>
				<label class="input">
					<i class="icon-prepend glyphicon glyphicon-lock"></i>
					<input type="password" name="new_cpw" id="new_cpw" placeholder="confirm password" onkeyup="validatePassword();" required>
				</label>
			</section>
		</div>
		<center><input type="submit" class="btn btn-primary" value="Submit"></center>
	</form>
</div>
</body>
</html>