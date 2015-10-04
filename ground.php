<?php
        session_start();
        if(!isset($_SESSION['first_name']))
        		header("location:/application_system/login.php");
        ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ground Booking</title>
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
	<form action="./php/verify.php" id="sky-form" class="sky-form" method="get">
                    <header>Ground Booking</header>
                    
                    <fieldset>                  
                        <div class="row">
                            <section required>
                            <label>Event</label>
                            <div class="inline-group">
                                <label class="radio"><input type="radio" name="event_rdo" value="sports"><i class="rounded-x"></i>Sports</label>
                                <label class="radio"><input type="radio" name="event_rdo" value="cultural"><i class="rounded-x"></i>Cultural</label>
                                <label class="radio"><input type="radio" name="event_rdo" value="other"><i class="rounded-x"></i>Other</label>
                             </div>
							 <section>
						</div>
						 <div class="row">
                            <section>
								<label>Event Name :</label>
                                <label class="input">
                                    <i class="icon-prepend fa fa-flag"></i>
                                    <input type="text" name="noeve_txt" placeholder="Enter the name of event" required>
                                </label>
							</section>
						</div>
						<div class="row">
							<section required>
                            <label>Ground Required :</label>
                            <div class="row">
								
                                <div class="col col-6">
									<label>Outdoor</label>
                                    <label class="radio"><input type="radio" name="ground_rdo" value="dome ground"><i class="rounded-x"></i>Dome Ground</label>
                                    <label class="radio"><input type="radio" name="ground" value="cricket(lawn)"><i class="rounded-x"></i>Cricket(Lawn)</label>
                                    <label class="radio"><input type="radio" name="ground" value="cricket(net)"><i class="rounded-x"></i>Cricket(Net)</label>
									<label class="radio"><input type="radio" name="ground" value="volleyball court-2"><i class="rounded-x"></i>Volleyball court-1</label>
									<label class="radio"><input type="radio" name="ground" value="volleyball court-2"><i class="rounded-x"></i>Volleyball court-1</label>
									<label class="radio"><input type="radio" name="ground" value="lawntennis-1"><i class="rounded-x"></i>Lawntennis-1</label>
									<label class="radio"><input type="radio" name="ground" value="lawntennis-2"><i class="rounded-x"></i>Lawntennis-2</label>
									<label class="radio"><input type="radio" name="ground" value="lawntennis-3"><i class="rounded-x"></i>Lawntennis-3</label>
									<label class="radio"><input type="radio" name="ground" value="basketball-1"><i class="rounded-x"></i>basketball-1</label>
									<label class="radio"><input type="radio" name="ground" value="basketball-2"><i class="rounded-x"></i>basketball-2</label>
                                </div>
								
                                <div class="col col-6">
								<label>Indoor</label>
                                    <label class="radio"><input type="radio" name="ground" value="badminton"><i class="rounded-x"></i>Badminton</label>
                                    <label class="radio"><input type="radio" name="ground" value="tabletennis-1"><i class="rounded-x"></i>TableTennis-1</label>
                                    <label class="radio"><input type="radio" name="ground" value="tabletennis-2"><i class="rounded-x"></i>TableTennis-2</label>
									<label class="radio"><input type="radio" name="ground" value="tabletennis-3"><i class="rounded-x"></i>TableTennis-3</label>
									<label class="radio"><input type="radio" name="ground" value="tabletennis-4"><i class="rounded-x"></i>TableTennis-4</label>
									<label class="radio"><input type="radio" name="ground" value="tabletennis-5"><i class="rounded-x"></i>TableTennis-5</label>
									<label class="radio"><input type="radio" name="ground" value="carom-1"><i class="rounded-x"></i>Carom-1</label>
									<label class="radio"><input type="radio" name="ground" value="carom-2"><i class="rounded-x"></i>Carom-2</label>
									<label class="radio"><input type="radio" name="ground" value="carom-3"><i class="rounded-x"></i>Carom-3</label>
									<label class="radio"><input type="radio" name="ground" value="carom-4"><i class="rounded-x"></i>Carom-4</label>
                                </div>
							</div>
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
                            <section class="col col-6">
								<label>Number of participants</label>
                                <label class="input">
                                    <i class="icon-prepend fa fa-users"></i>
                                    <input type="text" name="par_txt" placeholder="Enter the number of paricipants" required>
                                </label>
							</section>
							<section class="col col-6">
								<label>Any Equipment Required??</label>
                                <label class="input">
                                    <i class="icon-prepend fa fa-shopping-cart"></i>
                                    <input type="text" name="equip_txt" placeholder="Enter the required equipment" required>
                                </label>
							</section>
						</div>
						<div class="row">
                            <section class="col col-6">
								<label>Any marking required on ground??</label>
                                <label class="input">
                                    <i class="icon-prepend fa fa-pencil"></i>
                                    <input type="text" name="mark_txt" placeholder="" required>
                                </label>
							</section>
							<section class="col col-6">
								<label>Name of Event Coordinator</label>
                                <label class="input">
                                    <i class="icon-prepend fa fa-user"></i>
                                    <input type="text" name="cor_txt" placeholder="Enter event coordinator name" required>
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