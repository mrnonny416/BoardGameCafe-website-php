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
$menu_id=$_POST["menu_id"];
$gmenu_id=$_POST["gmenu_id"];
$menu_name=$_POST["menu_name"];
$menu_target=$_POST["menu_target"];
$menu_status=$_POST["menu_status"];
$menu_memo=$_POST["menu_memo"];

$menu_link="";

$menu_link1=$_FILES['menu_link1']['name'];
$menu_link2=$_POST['menu_link2'];

if($menu_link1 != ""){
	$menu_link="file_link/".$_FILES['menu_link1']['name'];
	move_uploaded_file($_FILES['menu_link1']['tmp_name'],"$menu_link");
}
if($menu_link2 != ""){
	$menu_link=$menu_link2;
}
echo "$menu_id/$gmenu_id/$menu_name/$menu_link/$menu_target/$menu_status/$menu_memo";
$result=mysql_query("UPDATE menu set gmenu_id='$gmenu_id',menu_name='$menu_name',menu_link='$menu_link',menu_target='$menu_target',menu_status='$menu_status',menu_memo='$menu_memo' WHERE menu_id='$menu_id'");
if(!$result){
  echo"<br><h2>การบันทึกข้อผิดพลาด !!!</h2>";
}else{
  echo"<br><h2><center>บันทึกข้อมูล เรียนร้อยแล้ว </center></h2>";
  echo " <meta http-equiv='refresh' content='0;URL=admin_menu.php'>";
}
 ?>

</body>
</html>
