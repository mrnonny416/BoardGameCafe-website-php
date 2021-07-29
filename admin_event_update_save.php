<?php
	session_start();
?>
<?php
$user_username=$_SESSION["user_username"];
	include("Connections/connect.php");
?>
<html>
<head><titel></titel>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
<?php
$game_name=$_POST["game_name"];
$event_place=$_POST["event_place"];
$event_date=$_POST["event_date"];
$event_time=$_POST["event_time"];
$event_memo=$_POST["event_memo"];

if($event_time ==""){
	$result2= mysql_query("SELECT * from event where event_id='$event_id'");
			$row2=mysql_fetch_assoc($result2);
			$event_time=$row2["event_time"];
			}
			if($event_date ==""){
				$result3= mysql_query("SELECT * from event where event_id='$event_id'");
						$row3=mysql_fetch_assoc($result3);
						$event_date=$row3["event_date"];
						}








$result=mysql_query("UPDATE event set game_name='$game_name',event_place='$event_place',event_date='$event_date',event_time='$event_time',event_memo='$event_memo' where event_id='$event_id'");
if(!$result){
  echo"<br><h2>การบันทึกข้อผิดพลาด !!!</h2>";
}else{
  echo"<br><h2><center>บันทึกข้อมูล เรียนร้อยแล้ว </center></h2>";
  echo " <meta http-equiv='refresh' content='0;URL=admin_event.php'>";
}
 ?>

</body>
</html>
