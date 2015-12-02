<?php
error_reporting(0);

$host = "localhost"; //database location
$user = "siliconw_micro"; //database username
$pass = "modem123silicon"; //database password
$db_name = "siliconw_micro"; //database name

   //database connection
$link = mysql_connect($host, $user, $pass);
mysql_select_db($db_name,$link);

$link = mysql_connect($host,$user,$pass);
if (!$link) {
    die('Not connected : ' . mysql_error());
}

// make foo the current db
$db_selected = mysql_select_db($db_name, $link);
if (!$db_selected) {
    die ('Can\'t use connection : ' . mysql_error());
}



//sets encoding to utf8
//mysql_query("SET NAMES utf8");
?>