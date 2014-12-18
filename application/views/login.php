<style type="text/css">
<!--
body {
	background-color: #FFFFFF;
	background-image: url(images/Tulips.jpg);
	background-repeat: no-repeat;
}
-->
</style></head>
<body>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<table width="400" height="200" align="center" cellpadding="2" cellspacing="2" bgcolor="#00CCFF">
<?php echo $info;?>
<tr>
<td width="219" align="left">&nbsp;&nbsp;
<?php echo validation_errors(); ?>
<?php echo form_open('login') ?>
  &nbsp;&nbsp;用户名：
    <input name="username" type="text" size="20" id="username" >
  <br>
  &nbsp;&nbsp;密&nbsp;&nbsp;码：
  <input name="password" type="password" size="20" id="password">

  <br>
  &nbsp;&nbsp;<input name="submit" type="submit" value="登录">
</form>
&nbsp;&nbsp;<a href="#">忘了密码？</a> <a href="http://localhost/lzweb/index.php/register">注册新用户</a></td>
</tr>
</table>
</body>
</html>
