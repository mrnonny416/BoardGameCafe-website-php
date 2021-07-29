<?php
	session_start();
?>
<?php
	include("Connections/connect.php");
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$co_picture="cospace/".$HTTP_POST_FILES['co_picture']['name'];
copy($HTTP_POST_FILES['co_picture']['tmp_name'],"$co_picture");
if($co_picture !=""){
//echo"$cphoto_id";
  $result=MYSQL_query("UPDATE co_space SET co_picture = '$co_picture' WHERE co_id='$co_id'");

if(!$result){
  echo "การเปลี่ยนรูปภาพ ผิดพลาด !!!";
  echo" <meta http-equiv='refresh' content='0;URL=admin_co_space.php'>";
}else{
	echo"เปลี่ยนco_space สำเร็จ";
  echo" <meta http-equiv='refresh' content='0;URL=admin_co_space.php'>";
}
}else{
    echo" <meta http-equiv='refresh' content='0;URL=admin_co_space.php'>";
}
 ?>
