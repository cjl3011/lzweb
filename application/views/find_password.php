<html>
<head>
<title>找回密码</title>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
</head>
<body>
<?php echo validation_errors(); ?>
<?php echo form_open('find_password') ?>
<h1>你所查找的用户</h1>
<br>
<table width="400" border="0">
	<tr>
		<td align="center">用户名</td>
		<td><input name="username" type="text" id="username" size="20"></input></td>
	</tr>
</table>
<input name="sign_up" type="submit" id="sign_up" value="查找"></input><br>
如果您已经有账号，请点击<a href="http://localhost/lzweb/index.php/login">这里</a>登陆。
</form>
</body>
</html>
