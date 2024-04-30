<?php require_once('Connections/connect.php'); ?>
<?php
session_start();
?>

<html>

<head>
	<meta http-equiv="Content-group" content="text/html; charset=utf-8" />
	<title>Untitled Document</title>
</head>

<body>

	<?php
	include("Connections/connect.php");
	$user_username = $_POST["user_username"];
	$user_password = $_POST["user_password"];
	//echo " >>$username <br> >>$password <hr>";
	$chk = 0;
	$result = mysqli_query($conn, "SELECT * FROM user");
	while ($row = mysqli_fetch_assoc($result)) {
		$user_username1 = $row["user_username"];
		$user_password1 = $row["user_password"];
		$user_type = $row["user_type"];
		//		echo "<br>$username1 / $password1 >> $group";
		if (($user_username == $user_username1) and ($user_password == $user_password1)) {
			$chk = 1;
			$user_type1 = $user_type;
		}
	}
	if ($chk == 1) {
		if ($user_type1 == "admin") {
			echo "<meta http-equiv='refresh' content='0;URL=index_admin.php'>";
		}
		if ($user_type1 == "user") {
			echo "<meta http-equiv='refresh' content='0;URL=index_user.php'>";
		}
		$_SESSION["user_username"] = $user_username;
	} else {
		echo "<meta http-equiv='refresh' content='0;URL=index.php'>";
	}
	?>

</body>

</html>