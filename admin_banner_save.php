<?php
	session_start();
?>
<?php
	include("Connections/connect.php");
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

$ban_name=$HTTP_POST_FILES['ban_name']['name'];
copy($HTTP_POST_FILES['ban_name']['tmp_name'],"images/$ban_name");
if($ban_name !=""){

  $result=MYSQL_query("UPDATE banner SET ban_name = '$ban_name' WHERE ban_id=1");

if(!$result){
  echo "การเปลี่ยนรูปภาพ ผิดพลาด !!!";
  echo" <meta http-equiv='refresh' content='0;URL=admin_banner.php'>";
}else{
	echo"เปลี่ยน banner สำเร็จ";
  echo" <meta http-equiv='refresh' content='2;URL=admin_banner.php'>";
}
}else{
    echo" <meta http-equiv='refresh' content='0;URL=admin_banner.php'>";
}
 ?>
