<script type="text/javascript" src="http://localhost/lzweb/static/js/jquery.js"></script>
<script type="text/javascript" src="http://localhost/lzweb/static/js/reply.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
		Reply.init();
		Shine.init();
    });
</script>
<div id="banner"></div>
	<div class="main">
		<div class="mission-content">
			<h2>项目名称：<?php echo $mission['title']?></h2>
			<div class="mission-header">
				<span>发布者：<?php echo $pub_user['username']?></span><span>发布时间：<?php echo $mission['pubtime']?></span><br/>
				<span>项目赏金：<?php echo $mission['payment']?>赏金</span>
			</div>
			<div class="mission-desc">
				项目描述：<br/>
				<?php echo $mission['content'];?>
			</div>
			<div class="comment">
				<input type='hidden' id="mid" value="<?php echo $mission['mid']?>"/>
				<span href="javascript:void(0)">回复(<?php echo count($reply);?>)</span>
				<span href="javascript:void(0)">点赞(<?php echo $mission['goodcount']?>)</span>
			</div>
			<div id="reply-area">
				<textarea id="area"></textarea>
				<input id="hidden-name" type="checkbox" style="float: left; height: 30px;"/>匿名回复
				<a class="small-blue-button" id="reply-btn" href="javascript:void(0)">回复</a>
			</div>
			<?php if($reply):?>
				<?php foreach ($reply as $key => $reply_item): ?>
					<div class="mission-reply">
						<div class="mission-header">
							<span><?php echo $reply_item['nickname']?></span><span><?php echo $reply_item['replytime']?></span>
							<a href="<?php echo base_url('mission_reply/add_goodcount') . '/?rid=' . $reply_item['rid'] . '&mid=' . $mission['mid']?>">点赞(<?php echo $reply_item['goodcount']?>)</a>
						</div>
						<p class="mission-desc">
							<?php echo $reply_item['content']?>
						</p>
					</div>
				<?php endforeach; ?>
			<?php else:?>
				<?php echo "暂无回复";?><br/>
			<?php endif;?>
		</div>
	</div>
