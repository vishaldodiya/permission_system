
<?php

$roll_no=$_GET["roll_no_txt"];
$fname=$_GET["fname_txt"];
$lname=$_GET["lname_txt"];
$depart=$_GET["ops"];
$add=$_GET["add_txt"];
$m_no=$_GET["mno_txt"];
$gen=$_GET["gender"];
$email=$_GET["email_txt"];
$pass=$_GET["pw"];

mysql_connect("localhost","root","");
mysql_select_db("permission_manager");
$query="insert into `login` values ('$roll_no','$fname','$lname','$depart','$add','$m_no','$gen','$email','$pass')";
mysql_query($query);
?>

 <script type='text/javascript'>
            alert('Successfully signed up.');
            window.location.assign("https://localhost/application_system/login.php");
        </script>