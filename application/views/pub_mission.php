<style type="text/css">
<!--
.STYLE3 {
	font-size: 14px;
	color: #000000;
}
body {
	background-color: #0099FF;
}
.STYLE5 {color: #FF00FF}

-->
</style>
</head>

<body>
<h1><span class="STYLE5">发布任务：</span></h1>
	
<p>&nbsp;</p>
<?php echo validation_errors(); ?>
<?php echo form_open('pub_mission') ?>
<table width="830" border="1" cellpadding="5" cellspacing="0" bgcolor="#CCCCCC">
	<tr>
		<td>主题：</td>
		<td><input name="theme" type="text"/></td>
	</tr>
	<tr>
		<td>标题：</td>
		<td><input name="title" type="text"/></td>
	</tr>
	<tr>
		<td >描述：</td>
		<td>
		  <textarea name="content"></textarea>
		</td>
	</tr>
	<tr>
		<td >悬赏：</td>
		<td>
		  <textarea name="payment"></textarea>
		</td>
		<td>
			<input name="submit" type="submit" value="提交">
		</td>
	</tr>
</table>
</form>
