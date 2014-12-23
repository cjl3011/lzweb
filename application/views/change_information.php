<html>
<head>
<title>修改信息</title>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
</head>
<body>
<?php echo validation_errors(); ?>
<?php echo form_open('change_information') ?>
<h1>你所修改的信息（用户名不能修改）</h1>
<br>
<table width="400" border="0">
	<tr>
		<td align="center">密码</td>
		<td><input name="password" type="text" id="password" size="20"></input></td>
		<td align="center">昵称</td>
		<td><input name="nickname" type="text" id="nickname" size="20"></input></td>
	</tr>
</table>
<input name="sign_up" type="submit" id="sign_up" value="修改"></input><br>
</form>
</body>
</html>
