<?php
session_start();
?>

<?php
include("Connections/connect.php");
?>

<meta charset="utf-8" />

<?php
$ban_name = $_FILES['ban_name']['name'];
copy($_FILES['ban_name']['tmp_name'], "images/$ban_name");
if ($ban_name != "") {
  $result = mysqli_query($conn, "UPDATE banner SET ban_name = '$ban_name' WHERE ban_id=1");

  if (!$result) {
    echo "การเปลี่ยนรูปภาพ ผิดพลาด !!!";
    echo "<meta http-equiv='refresh' content='0;URL=admin_banner.php'>";
  } else {
    echo "เปลี่ยน banner สำเร็จ";
    echo "<meta http-equiv='refresh' content='2;URL=admin_banner.php'>";
  }
} else {
  echo "<meta http-equiv='refresh' content='0;URL=admin_banner.php'>";
}
?>