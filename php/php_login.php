<?php

$uname=$_GET["uname_txt"];
$pw=$_GET["pw"];
mysql_connect("localhost","root","");
mysql_select_db("permission_manager");

$rs=mysql_query("SELECT * FROM `login`");
 

while($arr=mysql_fetch_array($rs))
{
$db_uname=$arr["email"];
$db_pw=$arr["password"];
$user_first_name=$arr["f_name"];
$user_roll_no=$arr["roll_no"];
$flag=0;
    
    if($db_uname==$uname)
    {
        $flag=1;
        break;
    }

}

if($flag==1)
{
    if($db_pw==$pw)
	{
		
		
		session_start();
		$_SESSION['first_name']=$user_first_name;
		$_SESSION['roll_no']=$user_roll_no;
		$_SESSION['email_id']=$db_uname;
		header('location: https://localhost/application_system/new_permission.php');
	}
	else
	{
        ?>
        <script type='text/javascript'>
            alert('Password is Invalid');
            window.location.assign("https://localhost/application_system/login.php");
            
        </script>
        
        <?php
        break;
	}
}
else
{
     ?>
        <script type='text/javascript'>
            alert('Username is Invalid');
            window.location.assign("https://localhost/application_system/login.php");
            
        </script>
        
    <?php
    
}


?>