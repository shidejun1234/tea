<?php
include('dbconfig.php');
header ( "content-type:text/html;charset=utf-8" );
if (! isset ( $_SESSION )) {
	session_start ();
}
if (isset ( $_SESSION ['userName'] )) {
	header ( "location:index.php" );
} elseif (! isset ( $_REQUEST ['username'] )) {
	header ( "location:login.php" );
} else {
	$username = preg_replace('/[ ]|[\']/', '', $_POST ['username']);
	$passcode = preg_replace('/[ ]|[\']/', '', $_POST ['passcode']);
	//计算摘要
	$password2 = sha1 ( $passcode );
	echo $username."<br/>";
	echo $passcode."<br/>";
	echo $password2."<br/>";
	require_once 'dbconfig.php';
	// 根据用户名和密码去查询帐号表
	$sql = "select * from user where username= '$username' and password='$password2'";
	echo $sql;
	$result = mysql_query ( $sql);
	if ($row = mysql_fetch_array ( $result )) {
		$_SESSION ['userName'] = $username;
		header ( "location:index.php" );
	} else {
		echo "<script>alert('用户名或密码错误!');</script>";
		echo "用户名或密码错误！<br/>";
		echo "<a href='login.php'>重新登陆</a>";
	}
}
?>