
<?php
    session_start();
    $roll_no=$_SESSION['roll_no'];

$event=$_GET["event_rdo"];
$eve_name=$_GET["noeve_txt"];
$ground=$_GET["ground_rdo"];
$date_from=$_GET["from_dt"];
$date_to=$_GET["to_dt"];
$time_from=$_GET["from_tm"];
$time_to=$_GET["to_tm"];
$part=$_GET["par_txt"];
$equip=$_GET["equip_txt"];
$mark=$_GET["mark_txt"];
$cordi=$_GET["cor_txt"];
$status="pending";

mysql_connect("localhost","root","");
mysql_select_db("permission_manager");
$query="insert into `ground_booking` values ('$roll_no','$event','$eve_name','$ground','$date_from','$date_to','$time_from','$time_to','$part','$equip','$mark','$cordi','$status')";
mysql_query($query);
echo $query;
echo $roll_no;

 ?>