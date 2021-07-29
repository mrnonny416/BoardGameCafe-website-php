<?php
	session_start();
?>
<?php
	include("Connections/connect.php");
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$cphoto_name="cafe/".$HTTP_POST_FILES['cphoto_name']['name'];
copy($HTTP_POST_FILES['cphoto_name']['tmp_name'],"$cphoto_name");
if($cphoto_name !=""){
//echo"$cphoto_id";
  $result=MYSQL_query("UPDATE cafe_photo SET cphoto_name = '$cphoto_name' WHERE cphoto_id='$cphoto_id'");

if(!$result){
  echo "การเปลี่ยนรูปภาพ ผิดพลาด !!!";
  echo" <meta http-equiv='refresh' content='0;URL=admin_cafe.php'>";
}else{
	echo"เปลี่ยนcafe สำเร็จ";
  echo" <meta http-equiv='refresh' content='0;URL=admin_cafe.php'>";
}
}else{
    echo" <meta http-equiv='refresh' content='0;URL=admin_cafe.php'>";
}
 ?>
