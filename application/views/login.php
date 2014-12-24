<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="keyword" content="">
    <meta name="description" content="">
    <meta name="author" content="elyot">
    <link type="text/css" href="http://localhost/lzweb/static/css/style.css" rel="stylesheet">
    <link type="text/css" href="http://localhost/lzweb/static/css/login.css" rel="stylesheet">
    <link type="text/css" href="http://localhost/lzweb/static/css/layout/header.css" rel="stylesheet">
	<link type="text/css" href="http://localhost/lzweb/static/css/login.css" rel="stylesheet">
<script type="text/javascript" src="http://localhost/lzweb/static/js/jquery.js"></script>
<script type="text/javascript" src="http://localhost/lzweb/static/js/login.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
		Login.init();
		Register.init();
		$("#register-tab").click(function(){
			$("#login-body").css({"display": "none"});
			$("#register-body").css({"display": "block"});
			$("#flag").animate({"left": "550px"}, 500);
		});
		$("#login-tab").click(function(){
			$("#register-body").css({"display": "none"});
			$("#login-body").css({"display": "block"});
			$("#flag").animate({"left": "150px"}, 500);
		});
    });
</script>
</head>
<body>
	<div class="header">
		<div class="header-content">
			<a id="logo" href="index.php">LzWeb</a>
			<a class="login-btn">登录/注册</a>
		</div>
	</div>
	<div class="main">
		<div class="main-area">
			<div class="main-header">
				<a href="javascript:void(0)" class="login-header-element" id="login-tab">登录</a>
				<a href="javascript:void(0)" class="login-header-element" id="register-tab">注册</a>
				<div id="flag"></div>
			</div>
			<div id="login-body">
				<div class="main-body">
					<input type="text" id="login-username" placeholder="Username"/>
					<input type="password" id="login-password" placeholder="Password"/>
					<a href="javascript:void(0)">忘记密码</a>
				</div>
				<div class="main-footer">
					<a href="javascript:void(0)" id="login-btn" class="middle-blue-button">登陆</a>
				</div>
			</div>
			<div id="register-body">
				<div class="main-body">
					<input type="text" id="register-username" placeholder="Username"/>
					<input type="password" id="register-password" placeholder="Password"/>
					<input type="password" id="register-confirm" placeholder="Confirm Password"/>
				</div>
				<div class="main-footer">
					<a href="javascript:void(0)" id="register-btn" class="middle-blue-button">注册</a>
				</div>
			</div>
		</div>
	</div>