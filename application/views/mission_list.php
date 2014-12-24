<script type="text/javascript" src="http://localhost/lzweb/static/js/page.js"></script>
<div id="banner"></div>
	<div class="main">
		<div class="main-header">
			<span class="sub-title">教育任务</span>
			<div style="float: right">
				<a class="middle-blue-button" href="pub_mission">我要发布任务</a>
			</div>
		</div>
		<div class="main-body">
			<div class="sort-handler">
				<a class="sort-element">默认排序</a>
				<a class="sort-element">按时间排序</a>
			</div>
			<!--
			<?php foreach ($mission as $mission_item):?>
			<div class="mission">
				<div class="mission-left">
					<span class="mission-title"><a href="http://localhost/lzweb/index.php/mission_reply/index/<?php echo $mission_item['mid']?>"><?php echo $mission_item['title']?></a></span>
					<br/>发布者:<?php echo $mission_item['nickname']?>
				</div>
				<div class="mission-right">
					发布时间：<?php echo $mission_item['pubtime']?>
					<br/>回复：<?php echo $mission_item['reply_count']?> &nbsp;点赞：<?php echo $mission_item['goodcount']?>
				</div>
			</div>
			<?php endforeach; ?>
			-->
			<div id="mission_list"></div>
			<div class="handler-area">
				<a class="page-handler-element">上一页</a>
				<a class="page-handler-element">
					<span id="current">1</span>/<span id="total">10</span>
				</a>
				<a class="page-handler-element">下一页</a>
			</div>
		</div>
	</div>