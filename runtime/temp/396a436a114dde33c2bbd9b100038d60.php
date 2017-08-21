<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:57:"E:\shop\public/../application/admin\view\login\login.html";i:1502803982;}*/ ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf8">

	<title>某某科技</title>

	<link href="__ZY__/css/layout.css" rel="stylesheet" type="text/css">
	<link href="__ZY__/css/login.css" rel="stylesheet" type="text/css">
</head>

<body class="login-bg">
	<div class="main ">
		<!--登录-->
		<div class="login-dom login-max">
			<div class="logo text-center">

				<img src="__ZY__/images/logo.png" width="180px" height="180px">

			</div>
			<div class="login container " id="login">
				<p class="text-big text-center logo-color">
					同一个账号，连接一切
				</p>
				<p class=" text-center margin-small-top logo-color text-small">
					控制台 | 云平台 | 论坛 | 云市场
				</p>
				<form class="login-form" action="" method="post" autocomplete="off">
					<div class="login-box border text-small" id="box">
						<div class="name border-bottom">
							<input type="text" placeholder="用户账号" id="username" name="username" required>
						</div>
						<div class="pwd">
							<input type="password" placeholder="密码"  name="password" required>
						</div>
					</div>
					<input type="hidden" name="formhash" value="5abb5d21"/>
					<input type="submit" class="btn text-center login-btn" value="立即登录">
				</form>
				<div class="forget">
				</div>
			</div>
		</div>

		<div class="footer text-center text-small ie">
			Copyright 2013-2016 某某科技科技有限公司 版权所有 <a href="#" target="_blank">滇ICP备13005806号</a>
			<span class="margin-left margin-right">|</span>
		</div>
		<div class="popupDom">
			<div class="popup text-default"></div>
		</div>
	</div>
</body>

</html>

