<?php
$username_connect = "root";
$password_connect = "root";
$hostname_connect = "localhost";
$database_connect = "isaradee2018";

$connection = mysql_connect($hostname_connect,$username_connect,$password_connect) or die ("Unable to connect to MySQL server.");
$db = mysql_select_db($database_connect,$connection) or die ("Unable to select database.");

mysql_query("SET NAMES UTF8");
?>
