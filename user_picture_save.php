<?php
session_start();
$user_username=$_SESSION["user_username"];
	include("Connections/connect.php");
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$user_picture=$HTTP_POST_FILES['user_picture']['name'];
echo "$user_picture";
/*
copy($HTTP_POST_FILES['user_picture']['tmp_name'],"picture/$user_picture");
if($user_picture !=""){

  $result=MYSQL_query("  UPDATE user SET user_picture = '$user_picture' WHERE user_username='$user_username'");

if(!$result){
  echo "การเปลี่ยนรูปภาพ ผิดพลาด !!!";
  echo" <meta http-equiv='refresh' content='0;URL=user_picture.php'>";
}else{
	echo"เปลี่ยนรูปประจำตัวสำเร็จ";
  echo" <meta http-equiv='refresh' content='2;URL=user_picture.php'>";
}
}else{
    echo" <meta http-equiv='refresh' content='0;URL=user_picture.php'>";
}
 ?>
*/
