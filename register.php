
		<?php
		include("Connections/connect.php");
		$result=mysql_query("SELECT * from banner where ban_id='1'");
		$row=mysql_fetch_assoc($result);
		$ban_name=$row["ban_name"];

		//echo "<img src='images/$ban_name' width='800'>";
	?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<title></title>
<style type="text/css">
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color:#4AD1D1;
}
h2
{
	color:#F9F9F9;
	font-family: Trivial;
	font-size: 40px;
}
</style>
</head>

<body>
<table width="100%" border="0">

  <tr>
    <td height="100%" align="center">
      <form id="form1" name="form1" method="POST" action="register_save.php" enctype="multipart/form-data">
        <table width="90%" align="center" border="0">
        	<tr>
        	<td align="center"><h2>ลงทะเบียนใช้งานระบบ</h2></td>
        	</tr>





        	<tr>
        	<td bgcolor="#4AD1D1">
        	<table width="80%" border="0"  align="center" bgcolor="#4AD1D1">
        	<tr>
        	<td><br><div class="input-group">
					<span class="input-group-addon">ชื่อเข้าใช้งานระบบ</span>
					<input type="text" class="form-control" placeholder="ชื่อเข้าใช้งานระบบ" name="user_username" id="user_username" size="20">
					</div><br></td>
        	</tr>
        	<tr>
        	<td><div class="input-group">
					<span class="input-group-addon">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; รหัสผ่าน&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
					<input type="password" class="form-control" placeholder="รหัสผ่าน" name="user_password" id="user_password" size="20">
					</div><br></td>
        	</tr>
        	<tr>
        	<td><div class="input-group">
					<span class="input-group-addon">&nbsp;&nbsp;&nbsp;&nbsp; ชื่อ-นามสกุล&nbsp;&nbsp;&nbsp;&nbsp;</span>
					<input type="text" class="form-control" placeholder="ชื่อ-นามสกุล" name="user_name" id="user_name" size="20">
					</div><br></td>
        	</tr>
        	<tr>
        	<td><div class="input-group">
					<span class="input-group-addon">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ที่อยู่&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
					<textarea type="text" class="form-control" placeholder="ที่อยู่" name="user_address" id="user_address" size="20"></textarea>
				</div><br></td>
        	</tr>
        	<tr>
        	<td><div class="input-group">
					<span class="input-group-addon">&nbsp;&nbsp;&nbsp;เบอร์โทรศัพท์&nbsp;&nbsp;&nbsp;&nbsp;</span>
					<input type="text" class="form-control" placeholder="เบอร์โทรศัพท์" name="user_tel" id="user_tel" size="20">
					</div><br></td>
        	</tr>
        	<tr>
        	<td><div class="input-group">
					<span class="input-group-addon">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;อีเมลล์&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
					<input type="email" class="form-control" placeholder="อีเมลล์" name="user_email" id="user_email" size="20">
					</div><br></td>
        	</tr>
        	<tr>
        	<td><div class="input-group">
					<span class="input-group-addon">&nbsp;&nbsp;รูปภาพประจำตัว&nbsp;&nbsp;</span>
					<input type="file" class="form-control" placeholder="รูปภาพประจำตัว์" name="user_picture" id="user_picture" size="20">
					</div><br></td>
        	</tr>
        	</table>
        	</td>
        	</tr>
        	<tr>
        	<td bgcolor="#4AD1D1" align="center">
      <button type="submit" class="btn btn-success">Login</button>
      <button type="reset" class="btn btn-danger">Cancle</button>
        </table>
        </form></td>
  </tr>


</table>
</body>
</html>
