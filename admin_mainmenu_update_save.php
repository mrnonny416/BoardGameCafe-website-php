<?php
	session_start();
?>
<?php
	include("Connections/connect.php");
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$mmenu_id=$_POST["mmenu_id"];
$mmenu_name="";
//$mmenu_name
//echo "$spic_id";
$mmenu_name=$_FILES['mmenu_name']['name'];

//echo "$spic_name/$spic_id";

//echo "$mmenu_name";
if($mmenu_name !=""){
	$mmenu_name="photo_menu/".$_FILES['mmenu_name']['name'];
	move_uploaded_file($_FILES['mmenu_name']['tmp_name'],"$mmenu_name");
  $result=MYSQL_query("UPDATE mainmenu SET mmenu_name='$mmenu_name' WHERE mmenu_id='$mmenu_id'");

if(!$result){
  echo "การเปลี่ยนรูปภาพ ผิดพลาด !!!";
  echo" <meta http-equiv='refresh' content='0;URL=admin_mainmenu.php'>";
}else{
	//echo"เปลี่ยน รูปภาพ สำเร็จ";
  echo" <meta http-equiv='refresh' content='0;URL=admin_mainmenu.php'>";
}
}else{
    echo" <meta http-equiv='refresh' content='0;URL=admin_mainmenu.php'>";
}
 ?>
