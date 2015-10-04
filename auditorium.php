<?php
        session_start();
        if(!isset($_SESSION['first_name']))
        		header("location:/application_system/login.php");
        ?>

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
</head>
<body>
    
    <div class="head">
        <?php
        	
            include "navigation.php";
        ?>
    </div>
	<div class="container">
		<form action="./php/php_auditorium.php" id="sky-form" class="sky-form" method="get">
                    <header>Auditorium Booking</header>
                    
                    <fieldset>                  
                        <div class="row">
                            <section required>
                            <label>Auditorium</label>
                            <div class="inline-group">
                                <label class="radio"><input type="radio" name="audi_rdo" value="c-audi"><i class="rounded-x"></i>C-Auditorium</label>
                                <label class="radio"><input type="radio" name="audi_rdo" value="A-seminar hall"><i class="rounded-x"></i>A-Seminar Hall</label>
                                <label class="radio"><input type="radio" name="audi_rdo" value="B-seminar hall"><i class="rounded-x"></i>B-seminar Hall</label>
								<label class="radio"><input type="radio" name="audi_rdo" value="nim auditorium"><i class="rounded-x"></i>NIM-Auditorium</label>
                             </div>
							 </section>
						</div>
						<label>Select date range</label>  
                         <div class="row">   
                                <section class="col col-6">
									<label class="input">
                                    <i class="icon-append fa fa-calendar"></i>
                                    <input type="date" name="from_dt" placeholder="Start date" required>
                                    </label>
                                </section>
                                <section class="col col-6">
                                    <label class="input">
                                    <i class="icon-append fa fa-calendar"></i>
                                    <input type="date" name="to_dt" placeholder="Expected finish date" required>                                         </label>
                                </section>
                        </div> 
						<label>Select time range</label>  
                         <div class="row">   
                                <section class="col col-6">
									<label class="input">
                                    <i class="icon-append fa fa-calendar"></i>
                                    <input type="time" name="from_tm" placeholder="Start time" required>
                                    </label>
                                </section>
                                <section class="col col-6">
                                    <label class="input">
                                    <i class="icon-append fa fa-calendar"></i>
                                    <input type="time" name="to_tm" placeholder="Expected finish time" required>                                         </label>
                                </section>
                        </div>
						<div class="row">
                            <section>
								<label>Purpose</label>
                                <label class="input">
                                    <i class="icon-prepend fa fa-bold"></i>
                                    <input type="text" name="pur_txt" placeholder="Enter the purpose of booking hall" required>
                                </label>
							</section>
						</div>
					</fieldset>
                    </div>
    </br>
    <center>
    <div class="col">
    <input type="submit" class="btn-u btn-u-blue pulse-grow" value="Submit">
    </div>
    </center>
    </br>
		</form>
	
</body>
