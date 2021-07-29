<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
  include("Connections/connect.php");


  $usesrname=$_POST["username"];
  $password=$_POST["password"];

  echo ">>> $username >>> $password" ;



  $result=MYSQL_query("  UPDATE user SET user_password = '$password' WHERE user_username='$username'");

if(!$result){
  echo "การเปลี่ยนรหัสผ่าน ผิดพลาด !!!";
    echo" <meta http-equiv='refresh' content='0;URL=admin_password.php'>";
}else{
  echo"การเปลี่ยนรหัสผ่าน เรียนร้อยแล้ว";
    echo" <meta http-equiv='refresh' content='0;URL=index_user.php'>";
}

 ?>
