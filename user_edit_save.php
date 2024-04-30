<?php
session_start();
$user_username = $_SESSION["user_username"];
include("Connections/connect.php");
?>
<html>

<head>
    <titel>save_register</titel>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>

<body>
    <?php
  include("Connections/connect.php");
  $user_name = $_POST["user_name"];
  $user_address = $_POST["user_address"];
  $user_tel = $_POST["user_tel"];
  $user_email = $_POST["user_email"];
  $result = mysqli_query($conn, "UPDATE user SET user_name = '$user_name',user_address = '$user_address',user_tel = '$user_tel',user_email = '$user_email' WHERE user_username='$user_username'");
  if (!$result) {
    echo "<br><h2>การบันทึกข้อผิดพลาด !!!</h2>";
    echo " <meta http-equiv='refresh' content='2;URL=index_user.php'>";
  } else {
    echo " <meta http-equiv='refresh' content='0;URL=index_user.php'>";
  }
  ?>
</body>

</html>