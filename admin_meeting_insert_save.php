<?php
session_start();
?>
<?php
$user_username = $_SESSION["user_username"];
include("Connections/connect.php");
?>
<html>

<head>
  <titel></titel>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>

<body>
  <?php
  $meeting_id = "";
  $user_username = $_POST["user_username"];
  $game_name = $_POST["game_name"];
  $meeting_date = date('d/M/Y');
  $meeting_time = date('h:i:sa');
  //echo"$meeting_id/$user_username/$game_name/$meeting_date/$meeting_time";
  $result = mysqli_query($conn, "INSERT into meeting values('$meeting_id','$user_username','$game_name','$meeting_date','$meeting_time')");
  if (!$result) {
    echo "<br><h2>การบันทึกข้อผิดพลาด !!!</h2>";
  } else {
    echo " <meta http-equiv='refresh' content='0;URL=user_board_game.php'>";
  }
  ?>

</body>

</html>