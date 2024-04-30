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
  $gmenu_id = $_POST["gmenu_id"];
  $gmenu_name = $_POST["gmenu_name"];
  $gmenu_status = $_POST["gmenu_status"];
  //echo "<br>$gmenu_id/$gmenu_name/$gmenu_status";
  $result = mysqli_query($conn, "UPDATE group_menu set gmenu_name='$gmenu_name',gmenu_status='$gmenu_status' WHERE gmenu_id='$gmenu_id'");
  if (!$result) {
    echo "<br><h2>การบันทึกข้อผิดพลาด !!!</h2>";
    echo " <meta http-equiv='refresh' content='0;URL=admin_gmenu.php'>";
  } else {
    echo "<br><h2><center>บันทึกข้อมูล เรียนร้อยแล้ว </center></h2>";
    echo " <meta http-equiv='refresh' content='0;URL=admin_gmenu.php'>";
  }
  ?>

</body>

</html>