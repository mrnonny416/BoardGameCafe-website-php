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
		<td >
			<div class="container">
	<div class="panel panel-info">
	      <div class="panel-heading"><a href="admin_menu.php">ราการเมนูย่อย</a> >> แก้ไขแถบเมนูย่อย</div>
				  <form id="form1" name="form1" method="POST" action="admin_menu_update_save.php" enctype="multipart/form-data">
						<?php
						//echo"$menu_id";
						$result1=mysql_query("SELECT * from menu where menu_id='$menu_id'");
						while($row1=mysql_fetch_assoc($result1))
						{
							$gmenu_id=$row["gmenu_id"];
							$menu_name=$row1["menu_name"];
							$menu_link=$row1["menu_link"];
							$menu_target=$row1["menu_target"];
							$menu_status=$row1["menu_status"];
							$menu_memo=$row1["menu_memo"];

						?>
	      <div class="panel-body">
					<div class="input-group">
							<span class="input-group-addon">รายการเมนูหลัก</span>
							<select class="form-control" name="gmenu_id"  id="gmenu_id">
								<?php
								$result=mysql_query("SELECT * from group_menu");
								while($row=mysql_fetch_assoc($result)){
								?>
								<option value="<?php echo $row["gmenu_id"];?>"><?php echo  $row["gmenu_id"].": ".$row["gmenu_name"];?></option>

							<?php
						}
						?>
							</select>
				</div>
<br>
									<div class="input-group">
      								<span class="input-group-addon">รายการเมนย่อย</span>
      								<input name="menu_name"  id="menu_name" type="text" class="form-control"  placeholder="" value="<?php echo $menu_name; ?>">
    						</div>
<br>
										<div class="input-group">
											<span class="input-group-addon">การเชื่อมโยงไฟล์</span>
											<input name="menu_link1"  id="menu_link1" type="file" class="form-control"  placeholder="">
											<span class="input-group-addon">URL Upload</span>
      								<input name="menu_link2"  id="menu_link2" type="text" class="form-control"  placeholder="" value="<?php echo $menu_link; ?>">
										</div>
<br>
											<div class="input-group">
												<span class="input-group-addon">ให้แสดงหน้าเว็บใหม่</span>
												<?php if ($menu_target == "Y"){ ?>
													<input type="radio" name="menu_target"  id="menu_target" value="target='_blank'" checked>ใช่
													<input type="radio" name="menu_target"  id="menu_target" value="target='_self'">ไม่ไช่
												<?php }else{ ?>
													<input type="radio" name="menu_target"  id="menu_target" value="target='_blank'" >ใช่
													<input type="radio" name="menu_target"  id="menu_target" value="target='_self'" checked>ไม่ไช่
												<?php } ?>
											</div>
<br>
							<div class="input-group">
	      				<span class="input-group-addon">แสดงในส่วนของคนทั่วไป</span>&nbsp;&nbsp;&nbsp;
								<?php if ($menu_status == "Y"){ ?>
								 <input type="radio" name="menu_status"  id="menu_status" value="Y" checked>ใช่
								 <input type="radio" name="menu_status"  id="menu_status" value="N">แสดง user
							 <?php }else{ ?>
								 <input type="radio" name="menu_status"  id="menu_status" value="Y" >ใช่
								 <input type="radio" name="menu_status"  id="menu_status" value="N" checked>แสดง user
							 <?php } ?>
	    				</div>
							<br>
																<div class="input-group">
							      								<span class="input-group-addon">หมายเหตุ</span>
							      								<input name="menu_memo"  id="menu_memo" type="text" class="form-control"  placeholder="" value="<?php echo $menu_memo; ?>">
							    						</div></div>
							<center>
							<?php } ?>
							<input type="hidden" id="menu_id" name="menu_id" value="<?php echo $menu_id; ?>">
							<input type="submit" class="btn btn-info" value="บันทึก">
							<input type="reset" class="btn btn-warning" value="ยกเลิก">
						</center>
						</div>

		</div></form>
		</td></tr>
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
