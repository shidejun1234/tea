<?php
$db = array (
		'server' => 'localhost',
		'port' => '3306',
		'username' => 'root',
		'password' => 'wx70461f0b0fe0ace0',
		'database' => 'tea'
);


$conn = mysql_connect($db['server'].':'.$db['port'],$db['username'],$db['password']);
if (! $conn) {
	echo "服务器不能连！" . mysql_error();
} else {
	// 声明字符集
	mysql_set_charset('utf8', $conn);
	// 选择数据库
	mysql_select_db($db['database'], $conn);
}