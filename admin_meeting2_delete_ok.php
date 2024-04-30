<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php
session_start();
$user_username = $_SESSION["user_username"];
include("Connections/connect.php");
$meeting_id = $_GET["meeting_id"];
$result = mysqli_query($conn, "DELETE from meeting where meeting_id='$meeting_id'");

if (!$result) {
  echo "<br><center> ไม่สามารถลบข้อมูลได้ !!! </center>";
  echo "<meta http-equiv='refresh' content='0;URL=user_board_game.php'>";
} else {
  echo "<meta http-equiv='refresh' content='0;URL=user_board_game.php'>";
}
echo "<meta http-equiv='refresh' content='0;URL=user_board_game.php'>";
?>