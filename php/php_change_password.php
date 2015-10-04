<?php
    session_start();
    $roll_no=$_SESSION['roll_no'];
    $old_pw=$_GET["old_pw"];
    $new_pw=$_GET["new_pw"];
    $new_cpw=$_GET["new_cpw"];
    
    mysql_connect("localhost","root","");
    mysql_select_db("permission_manager");
    
    $query="select password from login where roll_no='$roll_no'";
    $rs=mysql_query($query);
    
    if($rs === FALSE) { 
    die(mysql_error()); // TODO: better error handling
    }

    while($arr=mysql_fetch_array($rs))
    {
        
        if($arr["password"] == $old_pw)
        {
            $update="update login set password='$new_pw' where roll_no='$roll_no'";
            mysql_query($update);
             ?>
        <script type='text/javascript'>
            alert('Password Updated');
            window.location.assign("https://localhost/application_system/login.php");
        </script>
        
        <?php
        }
        else
        {
            ?>
        <script type='text/javascript'>
            alert('Password is Invalid');
            window.location.assign("https://localhost/application_system/change_password.php");
        </script>
        
        <?php
		break;
        }
    }

    
?>