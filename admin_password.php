<?php
session_start();
$user_username=$_SESSION["user_username"];
	include("Connections/connect.php");
?>
<?php
	include("Connections/connect.php");
	?>
	<?php
	$result=mysql_query("SELECT * from banner where ban_id='1'");
	$row=mysql_fetch_assoc($result);
	$ban_name=$row["ban_name"];

	//echo "<img src='images/$ban_name' width='800'>";
?>
<?php

//	echo ">> $username";

$result=mysql_query("select * from user where user_username='$user_username'");
	while($row=mysql_fetch_assoc($result))
	{
		$user_name=$row["user_name"];
    $user_picture=$row["user_picture"];
	}
//	echo ">> $name";

?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<title> index user </title>
<style type="text/css">
	h1
	{
		color:<?php echo $prof_color ?>;
		font-family: Trivial;
		font-size: 85px;
	}
	h2
	{
		color:<?php echo $prof_color ?>;
		font-family: Trivial;
		font-size: 20px;
	}
	h3
	{
		color:#555;
		font-family: Trivial;
		font-size: 25px;
	}
	h4{
		font-size: 15px;
		font-family: Trivial;
		color: #FFF;
	}
</style>
<script language="javascript">
   function fncSubmit()
   {
     if(document.form1.password.value == "")
     {
       alert(' คุณยังไม่ได้กรอก : รหัสผ่าน ');
       document.form1.password.focus();
       return false;
     }
     if(document.form1.con_password.value == "")
     {
       alert(' คุณยังไม่ได้กรอก : ยืนยันรหัสผ่านใหม ');
       document.form1.con_password.focus();
       return false;
     }
     if(document.form1.password.value != document.form1.con_password.value)
     {
       alert(' รหัสผ่านไม่ตรงกัน กรุณาป้อนรหัสผ่านใหม่อีกครั้ง ');
       document.form1.con_password.focus();
       return false;
     }
     document.form1.submit();
   }
 </script>


</head>

<body>
<table width="100%" border="0">
  <tr>
  <td height="149" background="images/<?php echo $ban_name; ?>" colspan="2">&nbsp;</td>
    <td>
      </td>
  </tr>
	<tr>
    <td><nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">WebSiteName</a>
        </div>
        <ul class="nav navbar-nav">
					<li class="active"><a href="#">หน้าหลัก</a></li>

					<?php
					$result1= mysql_query("SELECT * from group_menu where gmenu_status='Y'");
					while($row1=mysql_fetch_assoc($result1))
					{
						$gmenu_id=$row1["gmenu_id"];
						$gmenu_name=$row1["gmenu_name"];

					?>



					<li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $gmenu_name ?>
				<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<?php
								$result2= mysql_query("SELECT * from menu where gmenu_id='$gmenu_id' and menu_status='Y'");
								while($row2=mysql_fetch_assoc($result2))
								{
									$menu_name=$row2["menu_name"];
									$menu_link=$row2["menu_link"];
								?>
								<li><a href="<?php echo $menu_link ?>"><?php echo $menu_name ?></a></li>
									<?php } ?>
							</ul>
						</li>


					<?php } ?>
				</ul>
        <ul class="nav navbar-nav navbar-right">
        <li class="deopdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> <?php echo $user_name; ?>
          <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
     		 <li role="presentation"><a role="menuitem" tabindex="-1" href="user_picture.php"><?php echo"<img src='picture/$user_picture' width='140'><br>แก้ไขรูปภาพ"?></a></li>
     		 <li role="divider">
     		 <li role="presentation"><a role="menuitem" tabindex="-1" href="user_edit.php">แก้ไขข้อมูล</a></li>
      		<li role="presentation" class="divider"></li>
     		 <li role="presentation"><a role="menuitem" tabindex="-1" href="user_password.php">เปลี่ยนรหัสผ่าน</a></li>
    </ul></a></li></lu >
          <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
        </ul>
      </div></td>
  </tr>
  <tr>
    <td>
      <table align="center">
      <tr><form name="form1" method="POST" action="user_password_save.php" OnSubmit="return fncSubmit();"></td></tr>
        <tr>
          <td> ชื่อผู้ใช้งาน</td>
            <td><input name="username" type="text" id="username" value="<?php echo $user_username; ?>" readonly></td>
          </tr>
          <tr>
            <td>รหัสผ่านใหม่</td>
              <td><input name="password" type="password" id="password" maxlength="20"></td>
            </tr>
            <tr>
              <td>ยืนยันรหัสผ่าน</td>
                <td><input name="con_password" type="password" id="con_password" maxlength="25"></td>
              </tr>
              <tr>
                <td><input type="submit" value="ตกลง" ></td>
                <td><input type="reset" value="ยกเลิก"></td>
              </tr>
</table>
  </tr>

  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
<table width="100%">
<tr align="center" bgcolor="#2F2F2F" width="100%">
	<td><h4><br><br><br>Tel :<br>08-9755-0707 (Mon-Sat  9:00-17:00)<br><br>Copyright © 2018 ITSARADEE.tawee All Rights Reserved</h4><br><br><br></td>
</tr>
</table>
</body>
</html>
