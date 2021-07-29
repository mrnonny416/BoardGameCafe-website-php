<?php
	session_start();
?>
<?php
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
//	echo ">> $name";
}

?>


<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<title> index admin1111 </title>

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
					<a class="navbar-brand" href="#">AdminEditor</a>
				</div>
				<ul class="nav navbar-nav">
					<li class="active"><a href="index_admin.php">หน้าหลัก</a></li>
					<li><a href="admin_boardgame.php">boardgame</a></li>
					<li><a href="admin_event.php">กิจกรรม</a></li>
					<li><a href="admin_cafe.php">หน้าโปรโมตร้านกาแฟ</a></li>
				<li><a href="admin_co_space.php">Co-working space</a></li>
					<li class="dropdown">
					<li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#">จัดการหน้าเว็บ<span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a href="admin_banner.php">ภาพ Banner</a></li>
				<li><a href="admin_menu.php">รายการเมนู</a></li>
				<li><a href="admin_mainmenu.php">ภาพเมนู</a></li>
				<li><a href="admin_slideshow.php">ภาพ sildeshow</a></li>
			</ul>
		</li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
				<li class="deopdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> <?php echo $user_name; ?>
					<ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
				 <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><?php echo"<img src='picture/$user_picture' width='140'>"?></a></li>
				 <li role="divider">
				 <li role="presentation"><a role="menuitem" tabindex="-1" href="#"></a></li>
					<li role="presentation" class="divider"></li>
				 <li role="presentation"><a role="menuitem" tabindex="-1" href="user_password.php">เปลี่ยนรหัสผ่าน</a></li>
		</ul></a></li></lu >
					<li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
        </ul>
      </div></td>
  </tr>
	<tr align="center">
		<td>เปลี่ยนรูปภาพ banner slideshow ที่ <?php echo $spic_id; ?></td>
		</tr>
	<tr>
		<td>
			<table align="center">
			<tr><td><form name="form1" method="POST" action="admin_slideshow_update_save.php" enctype="multipart/form-data">
				<div class="alert alert-warning">
	<strong>Warning!</strong> ขนาดรูปภาพ <a href="#" class="alert-link">width = 360 x height = 200</a>.
					</div>
					<?php
					$result2= mysql_query("SELECT * from picslide where spic_id='$spic_id'");
					$row2=mysql_fetch_assoc($result2);

					$spic_name=$row2["spic_name"];
					$spic_time=$row2["spic_time"];

					echo "<img src='$spic_name' width='800'>";
?>
			</td></tr>
					<tr>
							<td><input name="spic_name" type="file" id="spic_name" maxlength="200"></td>
						</tr>
							<tr>
								<?php //echo "$spic_id"; ?>
								<input type="hidden" id="spic_id" name="spic_id" value="<?php echo $spic_id; ?>">
								<td><input type="submit" value="เปลี่ยนรูปภาพ" class="btn btn-success"></td>
							</tr>
</table>
		</td>
	</tr>
	<tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center" bgcolor="#33CCCC"><font color="#FFFFFF">Decelopment by : Tawee Sopapan,Information Techmology.Chiangrai Vocarional College. @Copyright 2017 </font></td>
  </tr>
</table>
</body>
</html>
