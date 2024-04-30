<?php
session_start();
?>
<?php
$user_username = $_SESSION["user_username"];
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
			font-size: 85px;
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
			<td>
				<table width="90%" align="center" border="0">
					<tr>
						<td width="60%">
							<ul class="nav nav-tabs">
								<li class="active"><a href="admin_menu.php">ราการเมนูย่อย</a></li>
								<li><a href="admin_gmenu.php">ราการเมนูหลัก</a></li>
							</ul>
						</td>
						<td><a href="admin_menu_insert.php"><img src="images/add.png" width="35">เพิ่มรายการเมนูย่อย
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<table class="table table-striped" width="100%" align="center" border="0">
								<tr align="center">
									<td>รหัสเมนูย่อย</td>
									<td>เมนูหลัก</td>
									<td>ราการเมนูย่อย</td>
									<td>การเชื่อมโยง</td>
									<td>การเปิดหน้า</td>
									<td>สถานะ</td>
									<td>หมายเหตุ</td>
									<td>การจัดการุ</td>
								</tr>
								<?php
								$result2 = mysqli_query($conn, "SELECT * from menu");
								while ($row2 = mysqli_fetch_assoc($result2)) {
									$menu_id = $row2["menu_id"];
									?>
									<tr>
										<td align="center">
											<?php echo $row2["menu_id"]; ?>
										</td>
										<td>
											<?php
											$gmenu_id = $row2["gmenu_id"];
											$result1 = mysqli_query($conn, "SELECT * from group_menu where gmenu_id='$gmenu_id'");
											while ($row1 = mysqli_fetch_assoc($result1)) {
												$gmenu_name = $row1["gmenu_name"];
											}
											echo $gmenu_name;
											?>
										</td>
										<td>
											<?php echo $row2["menu_name"]; ?>
										</td>
										<td>
											<?php echo $row2["menu_link"]; ?>
										</td>
										<td>
											<?php echo $row2["menu_target"]; ?>
										</td>
										<td align="center">
											<?php echo $row2["menu_status"]; ?>
										</td>
										<td>
											<?php echo $row2["menu_memo"]; ?>
										</td>
										<td align="center">
											<a href="admin_menu_update.php?menu_id=<?php echo $menu_id; ?>"><img
													src="images/edit.png" width="35"></a>
											<a href="admin_menu_delete_ok.php?menu_id=<?php echo $menu_id; ?>"
												OnClick="if(confirm('โปรดยืนยันการลบข้อมูล'))return true; else return false;"><img
													src="images/del.png" width="35"></a>
										</td>
									</tr>

								<?php } ?>
							</table>
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