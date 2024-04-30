<?php
require('Connections/connect.php');
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
            <?php echo $prof_color ?>;
        font-family: Trivial;
        font-size: 85px;
    }

    h2 {
        color:
            <?php echo $prof_color ?>;
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

    .divzxc {
        border-style: solid;
        border-color: hsla(89, 43%, 51%, 0.3);
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
        <tr align="right" bgcolor="#252525">
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
											?>
                                    <li><a href="<?php echo $menu_link ?>"><?php echo $menu_name ?></a></li>
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
            <td>


            </td>
        </tr>

        <tr>
            <td align="center">

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
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <div class="panel panel-info">
                    <div class="panel-heading"> กิจกรรมการนัดหมาย </div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <tr align="center">
                                <td>เกมส์</td>
                                <td>สถานที่</td>
                                <td>วัน</td>
                                <td>เวลา</td>
                            </tr>
                            <?php
							$result_event = mysqli_query($conn, "SELECT * from event order by event_id DESC");
							while ($row_event = mysqli_fetch_assoc($result_event)) {
								$event_id = $row_event["event_id"];
								$boardgame_name = $row_event["game_name"];
								$event_place = $row_event["event_place"];
								$event_date = $row_event["event_date"];
								$event_time = $row_event["event_time"];
								$event_memo = $row_event["event_memo"];

								$result_boardgame = mysqli_query($conn, "SELECT * from boardgame where game_name='$boardgame_name'");
								$row_boardgame = mysqli_fetch_assoc($result_boardgame);
								$boardgame_rate = $row_boardgame["game_rate"];
								$boardgame_picture = $row_boardgame["game_picture"];

								echo "
								 <tr align='center'>
								 <td width='25%' height='50'>
										<img src='$boardgame_picture' width='10%' height='100%' class='img-rounded' ><br>
										$boardgame_name
										</td>
												<td width='50%'>$event_place</td>
												<td>$event_date </td>
												<td>$event_time </td>
												</tr>";
							}
							?>
                        </table>
                    </div>
                </div>

            </td>
        </tr>
    </table>
    <div class="panel panel-warning">
        <div class="panel-heading"> กิจกรรมการนัดหมาย </div>
        <div class="panel-body">
            <table width="100%" border="0">
                <tr>
                    <td width="50%"></td>
                    <td width="50%"></td>
                </tr>
                <tr>
                    <?php
					$count = 1;
					$num = 2;
					$result_boardgame_list = mysqli_query($conn, "SELECT * from boardgame");
					while ($row_board_list = mysqli_fetch_assoc($result_boardgame_list)) {
						$boardgame_list_name = $row_board_list["game_name"];
						$boardgame_list_time = $row_board_list["game_time"];
						$boardgame_list_rate = $row_board_list["game_rate"];
						$boardgame_list_man = $row_board_list["game_man"];
						$boardgame_list_info = $row_board_list["game_info"];
						$boardgame_list_picture = $row_board_list["game_picture"];
						?>
                    <td height="510">
                        <div class="panel-body">
                            <table border="0" width="95%" align="center">

                                <tr>
                                    <td rowspan="7" height="500" width="80%" align="center"
                                        style="background-image:url('boardgame/ppoujh.png')">
                                        <img src="<?php echo $boardgame_list_picture ?>" width="90%" height="90%"
                                            class="img-rounded">
                                    </td>
                                    <td colspan="2" height="5%" bgcolor="#84D435">
                                        <font color="#FFF">เกมส์</font>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" height="20%" bgcolor="#8CEC64" align="center">
                                        <font color="#FFF">
                                            <?php echo $boardgame_list_name ?>
                                        </font>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" height="5%" bgcolor="#548EF1">
                                        <font color="#FFF">เวลา</font>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" height="20%%" bgcolor="#80B9E8" align="center">
                                        <font color="#FFF">
                                            <?php echo $boardgame_list_time ?>
                                        </font>
                                    </td>
                                </tr>
                                <tr>
                                    <td height="5%" width="10%" bgcolor="#8A6CB6">
                                        <font color="#FFF">ผู้เล่น</font>
                                    </td>
                                    <td bgcolor="#9D7CCD">
                                        <font color="#FFF">อายุ</font>
                                    </td>
                                </tr>
                                <tr>
                                    <td height="20%" bgcolor="#A295B4" align="center">
                                        <font color="#FFF">
                                            <?php echo $boardgame_list_man ?>
                                        </font>
                                    </td>
                                    <td bgcolor="#B6A6CD" align="center">
                                        <font color="#FFF">
                                            <?php echo $boardgame_list_rate ?>
                                        </font>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" height="25%" bgcolor="#CD887C" align="center">
                                        <font color="#FFF">
                                            <?php echo $boardgame_list_info ?>
                                        </font>
                                    </td>

                            </table>
                        </div>

                    </td>
                    <?php
						$count = $count + 1;
						if ($count > $num) {
							echo "</tr><tr>";
							$count = 1;
						}
					}

					?>
                </tr>
            </table>
        </div>
    </div>
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