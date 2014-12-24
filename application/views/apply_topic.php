<div id="banner"></div>

<div align="center">
<h1><span class="STYLE5">申请主题：</span></h1>
	
<p>&nbsp;</p>
<?php echo validation_errors(); ?>
<?php echo form_open('apply_topic') ?>
<table width="830" border="1" cellpadding="5" cellspacing="0" bgcolor="#CCCCCC">
	<tr>
		<td >主题：</td>
		<td>
		  <textarea name="theme"></textarea>
		</td>
		<td>
			<input name="submit" type="submit" value="提交">
		</td>
	</tr>
</table>
</form>
</div>