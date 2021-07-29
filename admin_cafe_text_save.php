<?php
	session_start();
?>
<?php
	include("Connections/connect.php");
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

$ctext_info=$_POST["ctext_info"];
$ctext_font=$_POST["ctext_font"];
$ctext_bg=$_POST["ctext_bg"];
if($ctext_id !=""){

  $result=MYSQL_query("UPDATE cafe_text SET ctext_info='$ctext_info',ctext_font='$ctext_font',ctext_bg='$ctext_bg' WHERE ctext_id=$ctext_id");

if(!$result){
  echo "การเปลี่ยนกล่องข้อความผิดพลาด ผิดพลาด !!!";
  echo" <meta http-equiv='refresh' content='0;URL=admin_cafe.php'>";
}else{
	echo"เปลี่ยนกลองงข้อความสำเร็จ สำเร็จ";
  echo" <meta http-equiv='refresh' content='0;URL=admin_cafe.php'>";
}
}else{
    echo" <meta http-equiv='refresh' content='0;URL=admin_cafe.php'>";
}
 ?>
