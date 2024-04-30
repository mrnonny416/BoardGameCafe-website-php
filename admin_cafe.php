<?php
session_start();
?>
<?php
$user_username = $_SESSION["user_username"];
include("Connections/connect.php");
?>
<?php
include("Connections/connect.php");
?>
<?php
$result = mysqli_query($conn, "SELECT * from banner where ban_id='1'");
$row = mysqli_fetch_assoc($result);
$ban_name = $row["ban_name"];

//echo "<img src='images/$ban_name' width='800'>";
?>
<?php

//	echo ">> $username";

$result = mysqli_query($conn, "select * from user where user_username='$user_username'");
while ($row = mysqli_fetch_assoc($result)) {
	$user_name = $row["user_name"];
	$user_picture = $row["user_picture"];
}
//	echo ">> $name";

?>

<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title> index admin </title>

	<style type="text/css">
		h1 {
			color:
				<?php echo $prof_color ?>
			;
			font-family: Trivial;
			font-size: 55px;
		}

		h2 {
			color:
				<?php echo $prof_color ?>
			;
			font-family: Trivial;
			font-size: 20px;
		}

		h3 {
			color: #555;
			font-family: Trivial;
			font-size: 25px;
		}

		h4 {
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
		</tr>
		<tr>
			<td>
				<nav class="navbar navbar-default">
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
								<a class="dropdown-toggle" data-toggle="dropdown" href="#">จัดการหน้าเว็บ<span
										class="caret"></span></a>
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
								<a class="dropdown-toggle" data-toggle="dropdown" href="#"><span
										class="glyphicon glyphicon-user"></span>
									<?php echo $user_name; ?>
									<ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
										<li role="presentation"><a role="menuitem" tabindex="-1" href="#">
												<?php echo "<img src='picture/$user_picture' width='140'>" ?>
											</a></li>
										<li role="divider">
										<li role="presentation"><a role="menuitem" tabindex="-1" href="#"></a></li>
										<li role="presentation" class="divider"></li>
										<li role="presentation"><a role="menuitem" tabindex="-1"
												href="user_password.php">เปลี่ยนรหัสผ่าน</a></li>
									</ul>
								</a>
							</li>
							</lu>
							<li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
						</ul>
					</div>
			</td>
		</tr>
		<tr>
			<td width="100%" border="1">
				<table width="80%" align="center">
					<tr>
						<td width="100%">
							<form name="form1" method="POST" action="admin_map_save.php" enctype="multipart/form-data">

								<div class="input-group">
									<span class="input-group-addon">ฝังแผนที่ ขนาด 420*1400 w*h</span>
									<?php $result10 = mysqli_query($conn, "SELECT * from map where map_id='1'");
									$row10 = mysqli_fetch_assoc($result10);
									$map_name = $row10["map_name"];
									$map_id = $row10["map_id"]
										?>
									<input type="text" class="form-control" placeholder="" name="map_name"
										id="map_name">
									<input type="hidden" class="form-control" placeholder="" name="map_id" id="map_id"
										value="<?php echo "$map_id" ?>">
								</div>
								<input type="submit" value="เปลีย่ยนแผนที่" class="btn btn-success">
								<br>
								<?php echo "$map_name" ?>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td>
				<table width="95%" border="4" align="center">
					<tr align="center" border="4">
						<?php $result5 = mysqli_query($conn, "SELECT * from cafe_text where ctext_id='1'");
						$row5 = mysqli_fetch_assoc($result5);
						$ctext_id1 = $row5["ctext_id"];
						$ctext_info1 = $row5["ctext_info"];
						$ctext_bg1 = $row5["ctext_bg"];
						$ctext_font1 = $row5["ctext_font"];
						?>

						<td height="420" bgcolor="<?php echo $ctext_bg1; ?>" width="50%">
							<font color="<?php echo $ctext_font1; ?>">
								<h1>
									<?php echo $ctext_info1; ?>
								</h1>
							</font>
							<a href="admin_cafe_text.php?ctext_id=<?php echo "$ctext_id1" ?>"><img src="images/edit.png"
									width="35"></a>
						</td>
						<td>
							<?php $result3 = mysqli_query($conn, "SELECT * from cafe_photo where cphoto_id='1'");
							$row3 = mysqli_fetch_assoc($result3);
							$cphoto_id1 = $row3["cphoto_id"];
							$cphoto_name1 = $row3["cphoto_name"]; ?>
							<img src="<?php echo $cphoto_name1; ?>" width="100%" height="420">
							<a href="admin_cafe_photo.php?cphoto_id=<?php echo "$cphoto_id1" ?>"><img
									src="images/edit.png" width="35"></a>
						</td>
					</tr>
					<tr align="center">
						<td height="420">
							<?php $result4 = mysqli_query($conn, "SELECT * from cafe_photo where cphoto_id='2'");
							$row4 = mysqli_fetch_assoc($result4);
							$cphoto_id2 = $row4["cphoto_id"];
							$cphoto_name2 = $row4["cphoto_name"]; ?>
							<img src="<?php echo $cphoto_name2; ?>" width="100%" height="420">
							<a href="admin_cafe_photo.php?cphoto_id=<?php echo "$cphoto_id2" ?>"><img
									src="images/edit.png" width="35"></a>
						</td>
						<?php $result6 = mysqli_query($conn, "SELECT * from cafe_text where ctext_id='2'");
						$row6 = mysqli_fetch_assoc($result6);
						$ctext_id2 = $row6["ctext_id"];
						$ctext_info2 = $row6["ctext_info"];
						$ctext_bg2 = $row6["ctext_bg"];
						$ctext_font2 = $row6["ctext_font"];
						?>
						<td height="420" bgcolor="<?php echo $ctext_bg2; ?>" width="50%">
							<font color="<?php echo $ctext_font2; ?>">
								<h1>
									<?php echo $ctext_info2; ?>
								</h1>
							</font>
							<a href="admin_cafe_text.php?ctext_id=<?php echo "$ctext_id2" ?>"><img src="images/edit.png"
									width="35"></a>
						</td>
						<td>
					</tr>
					<tr align="center">
						<td colspan="2">
							<?php $result7 = mysqli_query($conn, "SELECT * from cafe_photo where cphoto_id='3'");
							$row7 = mysqli_fetch_assoc($result7);
							$cphoto_id3 = $row7["cphoto_id"];
							$cphoto_name3 = $row7["cphoto_name"]; ?>
							<img src="<?php echo $cphoto_name3; ?>" width="100%">
							<a href="admin_cafe_photo.php?cphoto_id=<?php echo "$cphoto_id3" ?>"><img
									src="images/edit.png" width="35"></a>
						</td>
					</tr>
				</table>




			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
		</tr>
	</table>
	<table width="100%">
		<tr align="center" bgcolor="#2F2F2F" width="100%">
			<td>
				<h4><br><br><br>Tel :<br>08-9755-0707 (Mon-Sat 9:00-17:00)<br><br>Copyright © 2018 ITSARADEE.tawee All
					Rights Reserved</h4><br><br><br>
			</td>
		</tr>
	</table>
</body>

</html>