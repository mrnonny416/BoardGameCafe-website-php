<?php
session_start();
$user_username = $_SESSION["user_username"];
include("Connections/connect.php");
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$user_picture = $_FILES['user_picture']['name'];
echo "$user_picture";

// Delete the old image file
$result = mysqli_query($conn, "SELECT user_picture FROM user WHERE user_username = '$user_username'");
if ($result && mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_assoc($result);
  $old_user_picture = $row['user_picture'];
  if (!empty($old_user_picture) && file_exists("picture/$old_user_picture")) {
    unlink("picture/$old_user_picture");
  }
}

// Copy the new image file
if ($user_picture != "") {
  copy($_FILES['user_picture']['tmp_name'], "picture/$user_picture");

  $result = mysqli_query($conn, "UPDATE user SET user_picture = '$user_picture' WHERE user_username = '$user_username'");

  if (!$result) {
    echo "การเปลี่ยนรูปภาพ ผิดพลาด !!!";
    echo " <meta http-equiv='refresh' content='0;URL=user_picture.php'>";
  } else {
    echo "เปลี่ยนรูปประจำตัวสำเร็จ";
    echo " <meta http-equiv='refresh' content='2;URL=user_picture.php'>";
  }
} else {
  echo " <meta http-equiv='refresh' content='0;URL=user_picture.php'>";
}
?>