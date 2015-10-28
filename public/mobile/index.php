<?php

error_reporting(0);

$connect = mysql_connect('localhost', 'root', 'zxsw@34rfv') or die('Connection Error');

mysql_select_db('direktori') or die('DB Selection Error!');

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysql_query("select * from mobileakses where username = '$username' and password = '$password'") 
				or die(mysql_error());

$num = mysql_num_rows($query);

if($num == 1) {
	while($row = mysql_fetch_assoc($query))
		echo json_encode($row);
	
	mysql_close();
}