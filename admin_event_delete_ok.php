<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php
$user_username = $_SESSION["user_username"];
include("Connections/connect.php");
?>
<?php
echo "$event_id";
$result = mysqli_query($conn, "DELETE from event where event_id='$event_id'");

if (!$result) {
  echo "<br><center> ไม่สามารถลบข้อมูลได้ !!! </center>";
  echo "<meta http-equiv='refresh' content='2;URL=admin_event.php'>";
} else {
  echo "<br><center> ลบข้อมูลเรียบร้อยแล้ว </center>";
  echo "<meta http-equiv='refresh' content='0;URL=admin_event.php'>";
}
echo "<meta http-equiv='refresh' content='0;URL=admin_event.php'>";
?>