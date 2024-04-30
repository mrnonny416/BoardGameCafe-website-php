<?php
include("Connections/connect.php");
$result_banner = mysqli_query($conn, "SELECT * from banner where ban_id='1'");
$row_banner = mysqli_fetch_assoc($result_banner);
$banner_name = $row_banner["ban_name"];

?>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="http://www.jacklmoore.com/colorbox/jquery.colorbox.js"></script>
	<link rel="stylesheet" href="http://www.jacklmoore.com/colorbox/example1/colorbox.css" />
	<link rel="shortcut icon" href="images/12494896_922368304483308_7093255501030668154_n.jpg" />
	<title>ITSAREADEE</title>
	<style type="text/css">
		body {
			margin-left: 0px;
			margin-top: 0px;
			margin-right: 0px;
			margin-bottom: 0px;
		}

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

		.container {

			position: relative;

		}

		.image {
			opacity: 1;
			transition: .5s ease;

		}

		.middle {
			transition: .5s ease;
			opacity: 0;
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			-ms-transform: translate(-50%, -50%);
			text-align: center;
		}

		.container:hover .image {
			opacity: 0.3;
		}

		.container:hover .middle {
			opacity: 1;
		}

		.text {
			background-color: #FF4253;
			color: white;
			font-size: 30px;
			padding: 24px 52px;
		}
	</style>
</head>

<body>

	<table width="100%" border="0">
		<tr>
			<td>
				<nav class="navbar-inverse" style="background-color:#6ECFD2">
					<div class="container-fluid">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="#" onClick="register_box(); return false;">สมัครผู้ใช้งาน</a></li>
							<li>
								<form class="navbar-form navbar-right" method="POST" action="login_check.php">
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon"><i
													class="glyphicon glyphicon-user"></i></span>
											<input type="text" class="form-control" placeholder="Username"
												name="user_username">
										</div>
										<div class="input-group">
											<span class="input-group-addon"><i
													class="glyphicon glyphicon-lock"></i></span>
											<input type="password" class="form-control" name="user_password"
												placeholder="Password">
										</div>
										<button type="submit" class="btn btn-info">Login</button>
									</div>
								</form>
							</li>
						</ul>
					</div>
				</nav>
			</td>
		</tr>
		<tr>
			<td height="149" background="images/<?php echo $banner_name; ?>" colspan="2">&nbsp;</td>
		</tr>
		<tr>
			<td>
				<nav class="navbar navbar" style="background-color:#6ECFD2">
					<div class="container-fluid">
						<div class="navbar-header">
							<a class="navbar-brand" href="index.php">อิสระดี</a>
						</div>
						<ul class="nav navbar-nav">

							<?php
							$result_group_menu = mysqli_query($conn, "SELECT * from group_menu where gmenu_status='Y'");
							while ($row_group_menu = mysqli_fetch_assoc($result_group_menu)) {
								$group_menu_id = $row_group_menu["gmenu_id"];
								$group_menu_name = $row_group_menu["gmenu_name"];

								?>



								<li class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" href="#">
										<?php echo $group_menu_name ?>
										<span class="caret"></span>
									</a>
									<ul class="dropdown-menu">
										<?php
										$result_menu = mysqli_query($conn, "SELECT * from menu where gmenu_id='$group_menu_id' and menu_status='Y'");
										while ($row_menu = mysqli_fetch_assoc($result_menu)) {
											$menu_name = $row_menu["menu_name"];
											$menu_link = $row_menu["menu_link"];
											$menu_target = $row_menu["menu_target"];
											?>
											<li><a href="<?php echo $menu_link ?>" <?php echo $menu_target ?>><?php echo $menu_name ?></a></li>
										<?php } ?>
									</ul>
								</li>
							<?php } ?>
						</ul>
					</div>
				</nav>
			</td>
		</tr>

	</table>
	<table width="95%" align="center">

		<tr>
			<td align="center">
				<!--........................alert...................................................-->
				<div class="alert alert-danger">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
					<strong>โปรดเข้าสู่ระบบ</strong> โปรดเข้าสู่ระบบเพื่อประโยชน์สูงสุดในการใช้งานหน้าเว็บ
					<form class="navbar-form navbar" method="POST" action="login_check.php">
						<input type="text" class="form-control" placeholder="Username" name="user_username">
						<input type="password" class="form-control" name="user_password" placeholder="Password">
						<button type="submit" class="btn btn-info">Login</button><br>
						หากท่านยังไม่ได้เป็นสมาชิกกรุณา<a href="#"
							onClick="register_box(); return false;">สมัครผู้ใช้งาน</a>
				</div>
				<!--.......................................................................................................-->
			</td>
		</tr>
	</table>
	<table width="100%">
		<tr>
			<td align="center">
			</td>
		</tr>
		<tr>
			<td align="center">
				<?php $result_map = mysqli_query($conn, "SELECT * from map where map_id='1'");
				$row_map = mysqli_fetch_assoc($result_map);
				$map_name = $row_map["map_name"];
				echo "$map_name;"
					?>
				<br>
			</td>
		</tr>
		<tr>
			<td>
				<table width="95%" border="0" align="center">
					<tr align="center">
						<?php $result5 = mysqli_query($conn, "SELECT * from cafe_text where ctext_id='1'");
						$row5 = mysqli_fetch_assoc($result5);
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
						</td>
						<td>
							<?php $result3 = mysqli_query($conn, "SELECT * from cafe_photo where cphoto_id='1'");
							$row3 = mysqli_fetch_assoc($result3);
							$cphoto_name1 = $row3["cphoto_name"]; ?>
							<img src="<?php echo $cphoto_name1; ?>" width="100%" height="420">
						</td>
					</tr>
					<tr align="center">
						<td height="420">
							<?php $result4 = mysqli_query($conn, "SELECT * from cafe_photo where cphoto_id='2'");
							$row4 = mysqli_fetch_assoc($result4);
							$cphoto_name2 = $row4["cphoto_name"]; ?>
							<img src="<?php echo $cphoto_name2; ?>" width="100%" height="420">
						</td>
						<?php $result6 = mysqli_query($conn, "SELECT * from cafe_text where ctext_id='2'");
						$row6 = mysqli_fetch_assoc($result6);
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
						</td>
						<td>
					</tr>
					<tr align="center">
						<td colspan="2">
							<?php $result7 = mysqli_query($conn, "SELECT * from cafe_photo where cphoto_id='3'");
							$row7 = mysqli_fetch_assoc($result7);
							$cphoto_name3 = $row7["cphoto_name"]; ?>
							<img src="<?php echo $cphoto_name3; ?>" width="100%">
						</td>
					</tr>
				</table>
			</td>
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