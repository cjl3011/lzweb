<html>
<head>
<title>用户注册</title>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
</head>
<body>
<?php echo validation_errors(); ?>
<?php echo form_open('register') ?>
<h1>新用户注册</h1>
<br>
<table width="400" border="0">
	<tr>
		<td align="center">用户名</td>
		<td><input name="username" type="text" id="username" size="20"></input></td>
	</tr>
	<tr>
		<td align="center">昵称</td>
		<td><input name="nickname" type="text" id="nickname" size="20"></input></td>
	</tr>
	<tr>
		<td align="center">密码</td>
		<td><input name="password" type="password" id="password" size="20"></input></td>
	</tr>
	<tr>
		<td align="center">确认密码</td>
		<td><input name="confirm_password" type="password" id="confirm_password"
			size="20"></input></td>
	</tr>
</table>
<input name="sign_up" type="submit" id="sign_up" value="注册"></input><br>
如果您已经有账号，请点击<a href="http://localhost/lzweb/index.php/login">这里</a>登陆。
</form>
</body>
</html>
