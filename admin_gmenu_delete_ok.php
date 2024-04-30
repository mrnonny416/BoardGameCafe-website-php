<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php
$user_username = $_SESSION["user_username"];
include("Connections/connect.php");
?>
<?php

$result = mysqli_query($conn, "DELETE from group_menu where gmenu_id='$gmenu_id'");

if (!$result) {
  echo "<br><center> ไม่สามารถลบข้อมูลได้ !!! </center>";
  echo "<meta http-equiv='refresh' content='0;URL=admin_gmenu.php'>";
} else {
  echo "<br><center> ลบข้อมูลเรียบร้อยแล้ว </center>";
  echo "<meta http-equiv='refresh' content='0;URL=admin_gmenu.php'>";
}
echo "<meta http-equiv='refresh' content='0;URL=admin_gmenu.php'>";
?>