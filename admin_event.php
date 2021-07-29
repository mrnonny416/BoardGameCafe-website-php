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
  <tr>
    <td>
						<table width="90%" align="center" border="0">
									<tr><td width="60%">
											<ul class="nav nav-tabs">
  										<li ><a href="admin_meeting.php">คำขอเปิดกิจกรรม</a></li>
  									<li class="active"><a href="admin_event.php">จัดการกิจกรรม</a></li>
									</ul>
								</td>
							<td><a href="admin_event_insert.php"><img src="images/add.png" width="35">เพิ่มรายการกิจกรรม</a>
							</td></tr>
								<tr>
									<td colspan="2">
									<table class="table table-striped" width="100%" align="center" border="0" >
										<tr align="center">
											<td>รหัสกิจกรรม</td>
											<td>ชื่อเกมส์</td>
											<td>สถานที่</td>
											<td>วันที่จัด</td>
											<td>เวลา</td>
											<td>หมายเหตุ</td>
											<td>การจัดการ</td>
									</tr>
									<?php
												 $result6=mysql_query("SELECT * from event order by event_id DESC");
												 while($row6=mysql_fetch_assoc($result6))
												 {
													 	$event_id=$row6["event_id"];
														$game_name=$row6["game_name"];
														$event_place=$row6["event_place"];
														$event_date=$row6["event_date"];
														$event_time=$row6["event_time"];
														$event_memo=$row6["event_memo"];

														$result7=mysql_query("SELECT * from boardgame where game_name='$game_name'");
														$row7=mysql_fetch_assoc($result7);
														$game_rate=$row7["game_rate"];
														$game_picture=$row7["game_picture"];

													 echo"
													 <tr align='center'>
													 <td>$event_id </td>
													 <td width='25%' height='50'>
															<img src='$game_picture' width='10%' height='100%' class='img-rounded' ><br>
															$game_name
															</td>
																	<td width='20%'>$event_place</td>
																	<td>$event_date </td>
																	<td>$event_time </td>
																	<td>$event_memo </td>
																	";?>
																	<td align="center">
																		<a href="admin_event_update.php?event_id=<?php echo $event_id; ?>"><img src="images/edit.png" width="35"></a>
																		<a href="admin_event_delete_ok.php?event_id=<?php echo $event_id; ?>" OnClick="if(confirm('โปรดยืนยันการลบข้อมูล'))return true; else return false;"><img src="images/del.png" width="35"></a>
																	</td>
																	</tr>
												<?php }
												?>
								</table>
								</td></tr>
							</table>




		</td>
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
