<?php
        session_start();
        if(!isset($_SESSION['first_name']))
        		header("location:/application_system/login.php");
        ?>
<html>
	<head>
		<title>New Permission</title>
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
            body{
                background-repeat:no-repeat;
                background-size:cover;
            }
            
            .trans{
                background-image:url("ground.jpg");
                width:200px;
                height:100px;
                transition:0.5s;
                background-size:cover;
                background-repeat:no-repeat;
            }
            
            div.trans:hover{
                background-image:url("ground.jpg");
                background-size:cover;
                 background-repeat:no-repeat;
                width:350px;
                height:250px;    
            }
        </style>
        
	</head>
	
	<body background="img\bg.jpg">
     
	<div class="head">
        <?php
            include "navigation.php";
        ?>
      
    </div>

		
		<div class = "container" align="center">
		</br>
		<center>
		<h1>:New Permission:</h1></br></br></br></br></br>
		<div class="col">
		<a href="ground.php" ><input type="button" class="btn-u btn-u-green pulse-grow" value="Ground"></a>
		<a href="auditorium.php" ><input type="button" class="btn-u btn-u-gray pulse-grow" value="Auditorium"></a>
		</div>

        <a href="ground.php"><div class="trans">
            
            </div></a>
		</center>
		</br>
		</div>
	</body>
</html>