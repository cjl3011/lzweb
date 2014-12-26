<link rel="stylesheet" href="http://localhost/lzweb/static/foundation-icons.css" type="text/css" />
<script type="text/javascript" src="http://localhost/lzweb/static/js/jquery.js"></script>
<script type="text/javascript" src="http://localhost/lzweb/static/js/reply.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
		Reply.init();
		Shine.init();
		$("#grade > a").bind("click", function(event){
			var cur = $(event.target).parent();
			cur.nextAll("a").attr({"class": "star-normal"});
			cur.prevAll("a").attr({"class": "star-active"});
			cur.attr({"class": "star-active"});
			var point = cur.prevAll("a").length + 1;
			var mid = $('#mid').val();
			console.log(point);
			
			$.ajax({
				"type": "POST",
				"url": "/lzweb/index.php/mission_reply/add_grade",
				"data": "point="+point+"&mid="+mid,
				"dataType": "json",
				"success": function(data){
					if(data.result){
						location.replace("/lzweb/index.php/mission_reply/index/"+mid);
					}
				}
			});
		});
    });
</script>
<div id="banner"></div>
	<div class="main">
		<div class="mission-content">
			<h2>名称：<?php echo $mission['title']?></h2>
			<div class="mission-header">
				<span>发布者：<?php echo $pub_user['nickname']?></span><span>发布时间：<?php echo $mission['pubtime']?></span><br/>
				<span>项目赏金：<?php echo $mission['payment']?>赏金</span>
			</div>
			<div class="mission-desc">
				描述：<br/>
				<?php echo $mission['content'];?>
			</div>
			<div class="comment">
				<input type='hidden' id="mid" value="<?php echo $mission['mid']?>"/>
				<span href="javascript:void(0)">回复(<?php echo count($reply);?>)</span>
				<span id="grade">
					<label>评分:</label>
					<?php for($i=0;$i<ceil($mission['grade']);$i++):?>
						<a href="javascript:void(0)" class="star-active"><i class="fi-star size24"></i></a>
					<?php endfor;?>
					<?php for($i=0;$i<5-ceil($mission['grade']);$i++):?>
						<a href="javascript:void(0)" class="star-normal"><i class="fi-star size24"></i></a>
					<?php endfor;?>
					
				</span>
				<a href="<?php echo base_url('mission_reply/add_goodcount') . '/?mid=' . $mission['mid']?>">点赞(<?php echo $mission['goodcount']?>)</a>
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
