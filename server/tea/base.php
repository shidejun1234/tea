<?php
if (! isset ( $_SESSION )) {
	session_start ();
}
if (! isset ( $_SESSION ['userName'] )) {
	header ( "location:login.php" );
}
$userName = $_SESSION ['userName'];
// 计算当前文件名
$url = $_SERVER ['PHP_SELF'];
$start = strrpos ( $url, '/' );
$end = strrpos ( $url, '.' );
$menuName = substr ( $url, $start + 1, $end - $start - 1 );
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>学生信息管理系统</title>
<!-- BOOTSTRAP STYLES-->
<link href="assets/css/bootstrap.css" rel="stylesheet" />
<!-- FONTAWESOME STYLES-->
<link href="assets/css/font-awesome.css" rel="stylesheet" />
<!-- MORRIS CHART STYLES-->
<link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
<!-- CUSTOM STYLES-->
<link href="assets/css/custom.css" rel="stylesheet" />
<!-- GOOGLE FONTS-->

<script type="text/javascript" src="js/laydate.js"></script>
</head>
<body>
	<div id="wrapper">
		<nav class="navbar navbar-default navbar-cls-top " role="navigation"
			style="margin-bottom: 0">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
					data-target=".sidebar-collapse">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.html">学生信息管理</a>
			</div>
			<div
				style="color: white; padding: 15px 50px 5px 50px; float: right; font-size: 16px;">
            用户名：<?=$userName?>&nbsp;&nbsp;<a href='newpassword.php'>修改密码</a>&nbsp;&nbsp;<a
					href="loginout.php" class="btn btn-danger square-btn-adjust">退出登录</a>
			</div>
		</nav>
		<!-- /. NAV TOP  -->
		<nav class="navbar-default navbar-side" role="navigation">
			<div class="sidebar-collapse">
				<ul class="nav" id="main-menu">
					<li class="text-center"><img src="assets/img/find_user.png"
						class="user-image img-responsive" /></li>
					<li><a <?="adminn"==$menuName?"class='active-menu'":""?>
						href="adminn.php"><i class="fa fa-child fa-3x"></i> 学生信息</a></li>
					<li><a <?="score"==$menuName?"class='active-menu'":""?>
						href="score.php"><i class="fa fa-table fa-3x"></i> 成绩信息</a></li>
					<li><a <?="question"==$menuName?"class='active-menu'":""?>
						href="question.php"><i class="fa fa-table fa-3x"></i> 选择题</a></li>
					<li><a <?="paper"==$menuName?"class='active-menu'":""?>
						href="paper.php"><i class="fa fa-dashboard fa-3x"></i> 试卷管理</a></li>
					<li><a <?="dashboard"==$menuName?"class='active-menu'":""?>
						href="icon.php"><i class="fa fa-dashboard fa-3x"></i> 图标</a></li>


				</ul>
			</div>
		</nav>
		<!-- /. NAV SIDE  -->