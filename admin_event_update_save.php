<?php
session_start();
?>
<?php
$user_username = $_SESSION["user_username"];
include("Connections/connect.php");
?>
<html>

<head>
	<titel></titel>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>

<body>
	<?php
	$game_name = $_POST["game_name"];
	$event_place = $_POST["event_place"];
	$event_date = $_POST["event_date"];
	$event_time = $_POST["event_time"];
	$event_memo = $_POST["event_memo"];

	if ($event_time == "") {
		$result2 = mysqli_query($conn, "SELECT * from event where event_id='$event_id'");
		$row2 = mysqli_fetch_assoc($result2);
		$event_time = $row2["event_time"];
	}
	if ($event_date == "") {
		$result3 = mysqli_query($conn, "SELECT * from event where event_id='$event_id'");
		$row3 = mysqli_fetch_assoc($result3);
		$event_date = $row3["event_date"];
	}








	$result = mysqli_query($conn, "UPDATE event set game_name='$game_name',event_place='$event_place',event_date='$event_date',event_time='$event_time',event_memo='$event_memo' where event_id='$event_id'");
	if (!$result) {
		echo "<br><h2>การบันทึกข้อผิดพลาด !!!</h2>";
	} else {
		echo "<br><h2><center>บันทึกข้อมูล เรียนร้อยแล้ว </center></h2>";
		echo " <meta http-equiv='refresh' content='0;URL=admin_event.php'>";
	}
	?>

</body>

</html>