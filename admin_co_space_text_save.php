<?php
session_start();
?>
<?php
include("Connections/connect.php");
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

$co_text = $_POST["co_text"];

if ($co_text != "") {

  $result = mysqli_query($conn, "UPDATE co_space SET co_text='$co_text' WHERE co_id=$co_id");

  if (!$result) {
    echo "การเปลี่ยนกล่องข้อความผิดพลาด ผิดพลาด !!!";
    echo " <meta http-equiv='refresh' content='0;URL=admin_co_space.php'>";
  } else {
    echo "เปลี่ยนกลองงข้อความสำเร็จ สำเร็จ";
    echo " <meta http-equiv='refresh' content='0;URL=admin_co_space.php'>";
  }
} else {
  echo " <meta http-equiv='refresh' content='0;URL=admin_co_space.php'>";
}
?>