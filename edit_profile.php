<!DOCTYPE html>

<?php
    session_start();
    $roll_no=$_SESSION['roll_no'];
    mysql_connect("localhost","root","");
    mysql_select_db("permission_manager");
    
    $query="select * from login where roll_no='$roll_no'";
    $rs=mysql_query($query);
    
    if($rs === FALSE) { 
    die(mysql_error()); // TODO: better error handling
    }

    while($arr=mysql_fetch_array($rs))
    {
        $fname=$arr["f_name"];
        $lname=$arr["l_name"];
        $roll_no=$arr["roll_no"];
        $mno=$arr["mo_number"];
        $add=$arr["address"];
        $email=$arr["email"];
    }
?>



<html lang="en">
<head>
  <title>Edit</title>
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
     <div class="box">      
                <form action="./php/php_edit_profile.php" id="sky-form" class="sky-form">
                    <header>Edit</header>
                                    
                        <div class="row">
                            <section class="col col-6">
                                <label class="input">
                                    <i class="icon-prepend glyphicon glyphicon-user"></i>
                                    <input type="text" name="fname_txt" placeholder="First name" value="<?php echo $fname; ?>" required>
                                </label>
                            </section>
                            <section class="col col-6">
                                <label class="input">
                                    <i class="icon-prepend glyphicon glyphicon-user"></i>
                                    <input type="text" name="lname_txt" placeholder="Last name" value="<?php echo $lname; ?>" required>
                                </label>
                            </section>
                        </div>
                        
                        <div class="row">
                            <section class="col col-6">
                                <label class="input">
                                    <i class="icon-prepend glyphicon glyphicon-user"></i>
                                    <input type="text" name="roll_no_txt" placeholder="Enter Roll number" value="<?php echo $roll_no; ?>" required>
                                </label>
                            </section>
                            <section class="col col-6">
                                <label class="input">
                                    <i class="icon-prepend glyphicon glyphicon-phone"></i>
                                    <input type="tel" name="mno_txt" placeholder="Enter Mobile Number" value="<?php echo $mno; ?>" required>
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
							<section style="width:97.5%; margin-left:15px">
								<label class="label">E-mail</label>
								<label class="input">
									<i class="icon-prepend glyphicon glyphicon-user"></i>
									<input type="email" name="email_txt" placeholder="Enter your Email address" value="<?php echo $email;0 ?>" required>
								</label>
							</section>
						</div>
						<div class="row">
							<section style="width:97.5%; margin-left:15px">
								<label class="label">Address</label>
								<label class="input">
									<i class="icon-prepend glyphicon glyphicon-home"></i>
									<input type="text" name="add_txt" placeholder="Enter your Address" value="<?php echo $add; ?>" required>
								</label>
							</section>
						</div>
						
						<div class="row">
							
							<center><input type="submit" name="submit" class="btn btn-primary" value="Proceed"></center>
							
						</div>
    </div>                
</div>
</body>
</html>
    

    