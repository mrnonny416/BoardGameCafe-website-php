<?php
session_start();

$user_username = $_SESSION["user_username"];
include("Connections/connect.php");

if (isset($_GET["ctext_id"])) {
	$ctext_id = $_GET["ctext_id"];
} else {
	// กำหนดค่าเริ่มต้นให้กับ $ctext_id หากไม่ได้รับค่าผ่าน URL
	$ctext_id = 0;
}
?>

<form name="form1" method="POST" action="admin_cafe_text_save.php?ctext_id=<?php echo $ctext_id ?>"
	enctype="multipart/form-data">
	<!-- ตัวอื่นๆในฟอร์ม -->
</form>

<?php
$result = mysqli_query($conn, "SELECT * from banner where ban_id='1'");
$row = mysqli_fetch_assoc($result);
$ban_name = $row["ban_name"];

?>
<?php


$result = mysqli_query($conn, "select * from user where user_username='$user_username'");
while ($row = mysqli_fetch_assoc($result)) {
	$user_name = $row["user_name"];
	$user_picture = $row["user_picture"];
	//	echo ">> $name";
}

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
			margin-bottom: 0;
		}
	</style>
</head>

<body>
	<table width="100%" border="0">
		<tr>
			<td height="149" background="images/<?php echo $ban_name; ?>" colspan="2">&nbsp;</td>
			<td></td>
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
							<li class="dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" href="#">
									<span class="glyphicon glyphicon-user"></span>
									<?php echo $user_name; ?>
									<span class="caret"></span>
								</a>
								<ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
									<li role="presentation">
										<a role="menuitem" tabindex="-1" href="#">
											<?php echo "<img src='picture/$user_picture' width='140'>" ?>
										</a>
									</li>
									<li role="presentation" class="divider"></li>
									<li role="presentation">
										<a role="menuitem" tabindex="-1" href="user_password.php">เปลี่ยนรหัสผ่าน</a>
									</li>
								</ul>
							</li>
							<li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
						</ul>
					</div>
				</nav>
			</td>
		</tr>
		<tr align="center">
			<td>เปลี่ยนข้อความและสีพื้นหลัง</td>
		</tr>
		<tr>
			<td>
				<table align="center">
					<tr>
						<td>
							<form name="form1" method="POST"
								action="admin_cafe_text_save.php?ctext_id=<?php echo $ctext_id ?>"
								enctype="multipart/form-data">
								<?php
								$result = mysqli_query($conn, "SELECT * from cafe_text where ctext_id='$ctext_id'");
								$row = mysqli_fetch_assoc($result);
								$ctext_info = $row["ctext_info"];
								$ctext_font = $row["ctext_font"];
								$ctext_bg = $row["ctext_bg"];
								?>
						</td>
					</tr>
					<tr>
						<td width="600">
							<div class="input-group">
								<span class="input-group-addon">ข้อความ</span>
								<textarea type="text" class="form-control" placeholder="" name="ctext_info"
									id="ctext_info" rows="10"><?php echo $ctext_info ?></textarea>
							</div>

							<div class="input-group">
								<span class="input-group-addon">สีตัวอักษร</span>
								<input type="color" class="form-control" placeholder="" name="ctext_font"
									id="ctext_font" value="<?php echo $ctext_font ?>">
							</div>

							<div class="input-group">
								<span class="input-group-addon">สีพื้นหลัง</span>
								<input type="color" class="form-control" placeholder="" name="ctext_bg" id="ctext_bg"
									value="<?php echo $ctext_bg ?>">
							</div>
						</td>
					</tr>
					<tr>
						<td><input type="submit" value="เปลี่ยนรูปภาพประจำตัว" class="btn btn-success"></td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
		<tr>
			<td>&nbsp;</td>
		</tr>
	</table>
	<table width="100%">
		<tr align="center" bgcolor="#2F2F2F" width="100%">
			<td>
				<h4><br><br><br>Tel :<br>08-9755-0707 (Mon-Sat 9:00-17:00)<br><br>Copyright © 2018 ITSARADEE.tawee
					All Rights Reserved</h4><br><br><br>
			</td>
		</tr>
	</table>
</body>

</html>