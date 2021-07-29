<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php
$user_username=$_SESSION["user_username"];
	include("Connections/connect.php");
?>
<?php
echo "$game_name";
  $result=mysql_query("DELETE from boardgame where game_name='$game_name'");
	$result1=mysql_query("DELETE from event where game_name='$game_name'");

  if(!$result){
   echo"<br><center> ไม่สามารถลบข้อมูลได้ !!! </center>";
      echo"<meta http-equiv='refresh' content='0;URL=admin_boardgame.php'>";
  }else {
   echo"<br><center> ลบข้อมูลเรียบร้อยแล้ว </center>";
     echo"<meta http-equiv='refresh' content='0;URL=admin_boardgame.php'>";
  }
    echo"<meta http-equiv='refresh' content='0;URL=admin_boardgame.php'>";
  ?>
