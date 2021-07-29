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
$game_time=$_POST["game_time"];
$game_rate=$_POST["game_rate"];
$game_man=$_POST["game_man"];
$game_info=$_POST["game_info"];
$game_memo=$_POST["game_memo"];

$game_picture=$_FILES['game_picture']['name'];
if($game_picture !=""){
$game_picture="boardgame/".$_FILES['game_picture']['name'];
move_uploaded_file($_FILES['game_picture']['tmp_name'],"$game_picture");
}else{
	$game_picture="boardgame/nopic.png";
}
$result=mysql_query("INSERT into boardgame values('$game_name','$game_time','$game_rate','$game_man','$game_info','$game_picture','$game_memo')");

if(!$result){
  echo"<br><h2>การบันทึกข้อผิดพลาด !!!</h2>";
}else{
  echo"<br><h2><center>บันทึกข้อมูล เรียนร้อยแล้ว </center></h2>";
  echo " <meta http-equiv='refresh' content='0;URL=admin_boardgame.php'>";
}
 ?>

</body>
</html>
