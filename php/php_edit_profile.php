<?php

     session_start();
    $roll_no=$_SESSION['roll_no'];
    $roll_no=$_GET["roll_no_txt"];
    $fname=$_GET["fname_txt"];
    $lname=$_GET["lname_txt"];
    $depart=$_GET["ops"];
    $add=$_GET["add_txt"];
    $m_no=$_GET["mno_txt"];
    $gen=$_GET["gender"];
    $email=$_GET["email_txt"];
    mysql_connect("localhost","root","");
    mysql_select_db("permission_manager");
    
    

    $query="update login set roll_no='$roll_no',f_name='$fname',l_name='$lname',department='$depart',address='$add',mo_number='$m_no',gender='$gen',email='$email' where roll_no='$roll_no'";
    mysql_query($query);
    
?>