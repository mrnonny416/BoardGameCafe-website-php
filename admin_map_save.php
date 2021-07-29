<?php
	session_start();
?>
<?php
	include("Connections/connect.php");
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$map_id=$_POST["map_id"];
$map_name=$_POST["map_name"];


//echo "$spic_id";
//echo "$spic_name/$spic_id";


if($map_name !=""){

  $result=MYSQL_query("UPDATE map SET map_name='$map_name' WHERE map_id='$map_id'");

if(!$result){
  echo "การเปลี่ยนรูปภาพ ผิดพลาด !!!";
  echo" <meta http-equiv='refresh' content='0;URL=admin_cafe.php'>";
}else{
	echo"เปลี่ยน รูปภาพ สำเร็จ";
  echo" <meta http-equiv='refresh' content='0;URL=admin_cafe.php'>";
}
}else{
    echo" <meta http-equiv='refresh' content='0;URL=admin_cafe.php'>";
}
 ?>
