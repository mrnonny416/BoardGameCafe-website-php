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

  $event_id = "";
  $game_name = $_POST["game_name"];
  $event_place = $_POST["event_place"];
  $event_date = $_POST["event_date"];
  $event_time = $_POST["event_time"];
  $event_memo = $_POST["event_memo"];
  echo "$game_name/$event_place/$event_date/$event_time/$event_memo";
  $result = mysqli_query($conn, "INSERT into event values('$event_id','$game_name','$event_place','$event_date','$event_time','$event_memo')");
  if (!$result) {
    echo "<br><h2>การบันทึกข้อผิดพลาด !!!</h2>";
  } else {
    echo "<br><h2><center>บันทึกข้อมูล เรียนร้อยแล้ว </center></h2>";
    echo " <meta http-equiv='refresh' content='0;URL=admin_event.php'>";
  }
  ?>

</body>

</html>