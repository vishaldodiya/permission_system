
<?php
session_start();
$roll_no=$_SESSION['roll_no'];
$audi=$_GET["audi_rdo"];
$date_from=$_GET["from_dt"];
$date_to=$_GET["to_dt"];
$time_from=$_GET["from_tm"];
$time_to=$_GET["to_tm"];
$purpose=$_GET["pur_txt"];
$status="pending";

mysql_connect("localhost","root","");
mysql_select_db("permission_manager");
$query="insert into `audi_booking` values ('$roll_no','$audi','$date_from','$date_to','$time_from','$time_to','$purpose','$status')";
mysql_query($query);
echo $query;
echo $roll_no;

 ?>

<script type='text/javascript'>
            alert('Auditorium registered Successfully.');
            window.location.assign("https://localhost/application_system/new_permission.php");
        </script>