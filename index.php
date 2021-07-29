<?php
	include("Connections/connect.php");
	$result=mysql_query("SELECT * from banner where ban_id='1'");
	$row=mysql_fetch_assoc($result);
	$ban_name=$row["ban_name"];

	$result3=mysql_query("SELECT * from prof where prof_id='1'");
	$row3=mysql_fetch_assoc($result3);
	$prof_id=$row3["prof_id"];
	$prof_name=$row3["prof_name"];
	$prof_text=$row3["prof_text"];
	$prof_color=$row3["prof_color"];
	$prof_bg=$row3["prof_bg"];

	//echo "<img src='images/$ban_name' width='800'>";
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
h4{
	font-size: 15px;
	font-family: Trivial;
	color: #FFF;
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
			<td><nav class="navbar-inverse" style="background-color:<?php echo $prof_bg ?>">
						<div class="container-fluid">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#" onClick="register_box(); return false;">สมัครผู้ใช้งาน</a></li>
						<li><form class="navbar-form navbar-right" method="POST" action="login_check.php">
							<div class="form-group">
								<div class="input-group">
				    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input type="text" class="form-control" placeholder="Username" name="user_username">
							</div>
							<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
								<input type="password" class="form-control"  name="user_password" placeholder="Password">
									</div>
								<button type="submit" class="btn btn-info">Login</button>
							</div>
						</form></li>
									</ul>
				</div></nav></td>

	</tr>



	</table>
<table width="100%" align="center"><tr><td height="400" bgcolor="<?php echo $prof_bg ?>" valign="middle" align="center">

<h1><?php echo $prof_name ?></H1>
	<h2><?php echo $prof_text ?><h2>


		  </td>
		  </tr>

		  <tr>
		  <td align="center">

				<!--.......................................................................................................-->
<!--				<table border="0" width="95%" height="100%">
					<tr><td height="200" width="25%"><div class="animation1"></div></td>
							<td><div class="animation2"></div></td>
							<td><div class="animation3"></div></td>
							<td><div class="animation4"></div></td>
					</tr>
					<tr><td height="200"><div class="animation5"></div></td>
							<td><div class="animation6"></div></td>
							<td><div class="animation7"></div></td>
							<td><div class="animation8"></div></td>
					</tr>
				</table>
-->

</td>
	</tr>
	<tr>
    <td colspan="2" width="100">
  </tr>
</table>
<table width="60%" border="0" align="center">
	<tr><td ><br><br><br><br></td>
		<td><br><br><br><br></td>
		<td><br><br><br><br></td>
	</tr>
<tr><td align="center"><a href="board_game.php"><img src="photo_menu/Board-Games.png" width="200"><br><h3>BOARD GAME</h3></a></td>
	<td align="center"><a href="cafe.php"><img src="photo_menu/Capture.png" width="200"><br><h3>CAFE</h3></a></td>
	<td align="center"><a href="co_space.php"><img src="photo_menu/co.png" width="200"><br><h3>CO-WORKSPACE</h3></a></td>
</tr>
<tr><td ><br><br><br><br></td>
	<td><br><br><br><br></td>
	<td><br><br><br><br></td>
</tr>
</table>

	<?php /*<tr><td>
		<table width="95%" height="90%" align="center" border="0">
				<!--.......................................................................................................-->
		<tr><td rowspan="2" height="745" width="40%" align="center" valign="middle"  class="container">
			<?php
				$result5=mysql_query("SELECT * from mainmenu where mmenu_id='1'");
				$row5=mysql_fetch_assoc($result5);
				$mmenu_name1=$row5["mmenu_name"];
			?>
			<a href="board_game.php" target="_blank">
				<img src="<?php echo"$mmenu_name1"; ?>" class="image" height="95%" width="90%">
				<div class="middle">
					<div class="text">Board Game</div>
				</div>
			</a>
</td>
		<!--.......................................................................................................-->
		<?php
			$result3=mysql_query("SELECT * from mainmenu where mmenu_id='2'");
			$row3=mysql_fetch_assoc($result3);
			$mmenu_name2=$row3["mmenu_name"];
		?>
				<td height="372" width="60%" align="center" valign="middle"  class="container">
					<a href="cafe.php" target="_blank">
					<img src="<?php echo"$mmenu_name2"; ?>" class="image" height="90%" width="90%">
					<div class="middle">
						<div class="text">Cafe</div>
					</div>
					</a>
	</td>
		</tr>
		<!--.......................................................................................................-->
		<?php
			$result4=mysql_query("SELECT * from mainmenu where mmenu_id='3'");
			$row4=mysql_fetch_assoc($result4);
			$mmenu_name3=$row4["mmenu_name"];
		?>
		<tr><td height="372" align="center" valign="middle" class="container">
			<a href="co_space.php" target="_blank">
			<img src="<?php echo"$mmenu_name3"; ?>" class="image" height="90%" width="90%">
			<div class="middle">
				<div class="text">Co Space Working</div>
			</div>
			</a>
</td>
			<!--.......................................................................................................-->
		</tr>
	</table>
	</td></tr> */?>
	<table width="100%">
  <tr align="center" bgcolor="#2F2F2F" width="100%">
    <td><h4><br><br><br>Tel :<br>08-9755-0707 (Mon-Sat  9:00-17:00)<br><br>Copyright © 2018 ITSARADEE.tawee All Rights Reserved</h4><br><br><br></td>
  </tr>
</table>
</body>
</html>
