<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("Connections/connect.php");

$username = $_POST["username"];
$password = $_POST["password"];

echo ">>> $username >>> $password";

$result = mysqli_query($conn, "UPDATE user SET user_password = '$password' WHERE user_username='$username'");

if (!$result) {
  echo "การเปลี่ยนรหัสผ่าน ผิดพลาด !!!";
  echo " <meta http-equiv='refresh' content='2;URL=user_password.php'>";
} else {
  echo "การเปลี่ยนรหัสผ่าน เรียนร้อยแล้ว";
  echo " <meta http-equiv='refresh' content='2;URL=index_user.php'>";
}

?>