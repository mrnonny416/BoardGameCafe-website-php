<?php
session_start();
?>
<?php
include("Connections/connect.php");
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$spic_id = $_POST["spic_id"];
$spic_name = "";

//echo "$spic_id";
$spic_name = $_FILES['spic_name']['name'];
$spic_name = "photobanner/" . $_FILES['spic_name']['name'];
move_uploaded_file($_FILES['spic_name']['tmp_name'], "$spic_name");
//echo "$spic_name/$spic_id";


if ($spic_name != "") {

  $result = mysqli_query($conn, "UPDATE picslide SET spic_name='$spic_name' WHERE spic_id='$spic_id'");

  if (!$result) {
    echo "การเปลี่ยนรูปภาพ ผิดพลาด !!!";
    echo " <meta http-equiv='refresh' content='0;URL=admin_slideshow.php'>";
  } else {
    echo "เปลี่ยน รูปภาพ สำเร็จ";
    echo " <meta http-equiv='refresh' content='0;URL=admin_slideshow.php'>";
  }
} else {
  echo " <meta http-equiv='refresh' content='0;URL=admin_slideshow.php'>";
}
?>