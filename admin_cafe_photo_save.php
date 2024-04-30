<?php
session_start();
?>
<?php
include("Connections/connect.php");
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$cphoto_name = "cafe/" . $_FILES['cphoto_name']['name'];
copy($_FILES['cphoto_name']['tmp_name'], $cphoto_name);
if ($cphoto_name != "") {
  $cphoto_id = $_GET["cphoto_id"];
  $result = mysqli_query($conn, "UPDATE cafe_photo SET cphoto_name = '$cphoto_name' WHERE cphoto_id='$cphoto_id'");
  if (!$result) {
    echo "การเปลี่ยนรูปภาพผิดพลาด !!!";
    echo " <meta http-equiv='refresh' content='0;URL=admin_cafe.php'>";
  } else {
    echo "เปลี่ยนรูปภาพ Cafe สำเร็จ";
    echo " <meta http-equiv='refresh' content='0;URL=admin_cafe.php'>";
  }
} else {
  echo " <meta http-equiv='refresh' content='0;URL=admin_cafe.php'>";
}
?>