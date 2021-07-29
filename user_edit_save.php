<?php
session_start();
$user_username=$_SESSION["user_username"];
	include("Connections/connect.php");
?>
<html>
<head><titel>save_register</titel>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
<<?php
include("Connections/connect.php");
$user_name=$_POST["user_name"];
$user_assress=$_POST["user_address"];
$user_tel=$_POST["user_tel"];
$user_email=$_POST["user_email"];
echo"<be>$user_username/$user_name/$user_address/$user_tel/$user_email>";
$result=mysql_query("UPDATE user SET user_name = '$user_name',user_address = '$user_address',user_tel = '$user_tel',user_email = '$user_email' WHERE user_username='$user_username'");
if(!$result){
  echo"<br><h2>การบันทึกข้อผิดพลาด !!!</h2>";
}else{
  echo"<br><h2>บันทึกข้อมูล เรียนร้อยแล้ว </h2>";
  echo " <meta http-equiv='refresh' content='0;URL=index_user.php'>";
}
 ?>

</body>
</html>
