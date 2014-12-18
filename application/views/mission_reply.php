任务：<br/>
发布者：<?php echo $pub_user['username']?>
<h2><?php echo $mission['title']?></h2>
<p><?php echo $mission['content']?></p>

<?php if($reply):?>
	<?php for ($i = 0; $i < count($reply); $i++): ?>
		回复者：<?php echo $reply[$i]['nickname']?>
		<h2><?php echo $reply[$i]['content']?></h2>
		<p><?php echo $reply[$i]['goodcount']?></p>
		
	<?php endfor ?>
<?php else:?>
	<?php echo "暂无回复";?><br/>
<?php endif;?>

<?php echo form_open('mission_reply/reply?mid=' . $mission['mid'] . '&uid=' . $mission['uid']) ?>
	<textarea name="content"></textarea>
	<input name="submit" type="submit" value="提交">
</form>