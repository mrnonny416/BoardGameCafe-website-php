<?php
session_start();
$user_username=$_SESSION["user_username"];
	include("Connections/connect.php");
	$result=mysql_query("SELECT * from banner where ban_id='1'");
	$row=mysql_fetch_assoc($result);
	$ban_name=$row["ban_name"];

	//echo "<img src='images/$ban_name' width='800'>";
?>
<?php

//	echo ">> $username";


//	echo ">> $name";

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
h1{
	color:#E0EEEB;
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
	<?php
	$result2= mysql_query("SELECT * from picslide");
	while($row2=mysql_fetch_assoc($result2))
	{
	$spic_id=$row2["spic_id"];
	$spic_name=$row2["spic_name"];
	$spic_time=$row2["spic_time"];

	?>
	div.animation<?php echo"$spic_id";?>{
	    width:100%;
	    height: 100%;
	    background-color: #F9F9F9;
	    position: relative;
	    -webkit-animation-name: animation<?php echo"$spic_id";?>; /* Chrome, Safari, Opera */
	    -webkit-animation-duration: <?php echo"$spic_time";?>s; /* Chrome, Safari, Opera */
	    -webkit-animation-iteration-count: infinite; /* Chrome, Safari, Opera */
	    animation-name: animation<?php echo"$spic_id";?>;
	    animation-duration: <?php echo"$spic_time";?>s;
	    animation-iteration-count: infinite;
	}
	@-webkit-keyframes animation<?php echo"$spic_id";?> {
	    0%   {background-image: url(<?php echo"$spic_name";?>);}
	    50% {background-image:url(photobanner/0.jpg );}
	    100%   {background-image: url(<?php echo"$spic_name";?>);}
	  }
	/* --------------------------------------------------------------------------------------------------------------------------------------------*/
	<?php } ?>

  </style>
	<script language="javascript">
function js_popup(theURL,width,height) { //v2.0
	leftpos = (screen.availWidth - width) / 2;
			toppos = (screen.availHeight - height) / 2;
		window.open(theURL, "viewdetails","width=" + width + ",height=" + height + ",left=" + leftpos + ",top=" + toppos);
}

function register_box(){
	$.colorbox({iframe:true, width:"500px", height:"600px", href: "register.php"});
}
</script>
</head>

<body>

<table width="100%" border="0">
	<tr align="right" bgcolor="#252525" >
			<td><nav class="navbar-inverse">
						<div class="container-fluid">
							<ul class="nav navbar-nav navbar-right">
			        <li class="deopdown">
							<?php	$result12=mysql_query("SELECT * from user where user_username='$user_username'");
									$row12=mysql_fetch_assoc($result12);

										$user_name=$row12["user_name"];
								    $user_picture=$row12["user_picture"];
										$user_name=$row12["user_name"];
										$user_address=$row12["user_address"];
										$user_tel=$row12["user_tel"];
										$user_email=$row12["user_email"];
										$user_picture=$row12["user_picture"];
									 ?>
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
				</div></nav></td>

	</tr>
  <tr>
    <td height="149" background="images/<?php echo $ban_name; ?>" colspan="2">&nbsp;</td>
  </tr>
	<tr><td>
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="index_user.php">อิสระดี</a>
				</div>
				<ul class="nav navbar-nav">


					<?php
					$result1= mysql_query("SELECT * from group_menu where gmenu_status='N'");
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
								$result2= mysql_query("SELECT * from menu where gmenu_id='$gmenu_id' and menu_status='N'");
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
			</div></nav>
	</td></tr>

	</table>
	<form id="form1" name="form1" method="POST" action="user_edit_save.php" enctype="multipart/form-data">
		<table width="90%" align="center">
			<tr>
			<td align="center" bgcolor="#0D3E50"><h1>แก้ไขข้อมูลผู้ใช้งาน</h1></td>
			</tr>

			<tr>
1			<td bgcolor="*-">
			<table width="80%" border="0"  align="center"bgcolor="#dedee7">
				<tr>
				<td><br><div class="input-group">
				<span class="input-group-addon">ชื่อเข้าใช้งานระบบ</span>
				<input type="text" class="form-control" placeholder="ชื่อเข้าใช้งานระบบ" name="user_username" id="user_username" size="20" value="<?php echo $user_username; ?>" readonly>
				</div><br></td>
				</tr>
				<tr>
				<td><div class="input-group">
				<span class="input-group-addon">&nbsp;&nbsp;&nbsp;&nbsp; ชื่อ-นามสกุล&nbsp;&nbsp;&nbsp;&nbsp;</span>
				<input type="text" class="form-control" placeholder="ชื่อ-นามสกุล" name="user_name" id="user_name" size="20" value="<?php echo $user_name; ?>">
				</div><br></td>
				</tr>
				<tr>
				<td><div class="input-group">
				<span class="input-group-addon">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ที่อยู่&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
				<textarea type="text" class="form-control" placeholder="ที่อยู่" name="user_address" id="user_address" size="20" ><?php echo $user_address; ?></textarea>
			</div><br></td>
				</tr>
				<tr>
				<td><div class="input-group">
				<span class="input-group-addon">&nbsp;&nbsp;&nbsp;เบอร์โทรศัพท์&nbsp;&nbsp;&nbsp;&nbsp;</span>
				<input type="text" class="form-control" placeholder="เบอร์โทรศัพท์" name="user_tel" id="user_tel" size="20" value="<?php echo $user_tel; ?>">
				</div><br></td>
				</tr>
				<tr>
				<td><div class="input-group">
				<span class="input-group-addon">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;อีเมลล์&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
				<input type="text" class="form-control" placeholder="อีเมลล์" name="user_email" id="user_email" size="20" value="<?php echo $user_email; ?>">
				</div><br></td>
				</tr>
			</table>
			</td>
			</tr>
			<tr>
			<td bgcolor="#0E5B77" align="center">
			<input type="submit" value="ตกลง" class="btn btn-success">
			<input type="reset" value="ยกเลิก" class="btn btn-warning"></td></tr>
		</table>
		</form>
		<table width="100%">
		<tr align="center" bgcolor="#2F2F2F" width="100%">
			<td><h4><br><br><br>Tel :<br>08-9755-0707 (Mon-Sat  9:00-17:00)<br><br>Copyright © 2018 ITSARADEE.tawee All Rights Reserved</h4><br><br><br></td>
		</tr>
		</table>
</body>
</html>
