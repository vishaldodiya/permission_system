<html>
	<head>
		<title>
		sign_in
		</title>
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
	</head>
	
	<body>
		
	
    <div class="head">
        <?php
        	session_start();
            include "navigation.php";
        ?>
    </div>
   
	<center>
	<h1>Login Information</h1></br></br>
	<div class="container" style="width:50%;">
	<form role="form" action="./php/php_login.php" method="get">
		<div class="form-group">
			<label for="email">Username:</label>
			<input type="email" class="form-control" name="uname_txt" placeholder="Enter your username" required>
		</div>
		<div class="form-group">
			<label for="pwd">Password:</label>
				<input type="password" class="form-control" name="pw" placeholder="Enter password" required>
		</div>
		
		
		<input type="submit" class="btn-u btn-u-blue pulse-grow" value="Submit" name="sbm">
		
		<div>
		<h5>If You have not Registered yet</h5>
		<a href="student_sign_up.php"><input type="button" class="btn-u btn-u-blue pulse-grow" value="Register" target="content"></a>
		</div>
	</form>
	</div>
	</center>
	
	</body>
</html>



