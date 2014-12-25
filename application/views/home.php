<script type="text/javascript">
    $(document).ready(function(){
		Shine.init();

    });
</script>

<div id="banner"></div>
<div id="first">
<div id="login">
	<div class="main_sort">
		<div class="main-header">
			<span class="sub-title">赏金排行-未完成</span>
		</div>
		<div class="main-body">
			<div class="sort-handler">
				<a class="sort-element">默认排序</a>
				<a class="sort-element">按时间排序</a>
				<a class="sort-element">按悬赏金额排序</a>
			</div>
			<?php foreach ($mission as $mission_item):?>
			<div class="mission_sort">
				<div class="mission-left_sort">
					<span class="mission-title"><a href="http://localhost/lzweb/index.php/mission_reply/index/<?php echo $mission_item['mid']?>"><?php echo $mission_item['title']?></a></span>
				</div>
				<div class="mission-right">
					admin
				</div>
			</div>
			<?php endforeach; ?>
			
		</div>
	</div>
</div>
<div id="context">
	<div class="main_sort">
		<div class="main-header">
			<span class="sub-title">赏金排行-未完成</span>
		</div>
		<div class="main-body">
			<div class="sort-handler">
				<a class="sort-element">默认排序</a>
				<a class="sort-element">按时间排序</a>
				<a class="sort-element">按悬赏金额排序</a>
			</div>
			<?php foreach ($mission as $mission_item):?>
			<div class="mission_sort">
				<div class="mission-left_sort">
					<span class="mission-title"><a href="http://localhost/lzweb/index.php/mission_reply/index/<?php echo $mission_item['mid']?>"><?php echo $mission_item['title']?></a></span>
				</div>
				<div class="mission-right">
					admin
				</div>
			</div>
			<?php endforeach; ?>
			
		</div>
	</div>
</div>
</div>
<div id="second">
<div id="left">
	<div class="main_sort">
		<div class="main-header">
			<span class="sub-title">赏金排行-未完成</span>
		</div>
		<div class="main-body">
			<div class="sort-handler">
				<a class="sort-element">默认排序</a>
				<a class="sort-element">按时间排序</a>
				<a class="sort-element">按悬赏金额排序</a>
			</div>
			<?php foreach ($mission as $mission_item):?>
			<div class="mission_sort">
				<div class="mission-left_sort">
					<span class="mission-title"><a href="http://localhost/lzweb/index.php/mission_reply/index/<?php echo $mission_item['mid']?>"><?php echo $mission_item['title']?></a></span>
				</div>
				<div class="mission-right">
					admin
				</div>
			</div>
			<?php endforeach; ?>
			
		</div>
	</div>
</div>
<div id="right">
	<div class="main_sort">
		<div class="main-header">
			<span class="sub-title">赏金排行-已完成</span>
		</div>
		<div class="main-body">
			<div class="sort-handler">
				<a class="sort-element">默认排序</a>
				<a class="sort-element">按时间排序</a>
				<a class="sort-element">按悬赏金额排序</a>
			</div>
			<?php foreach ($mission as $mission_item):?>
			<div class="mission_sort">
				<div class="mission-left_sort">
					<span class="mission-title"><a href="http://localhost/lzweb/index.php/mission_reply/index/<?php echo $mission_item['mid']?>"><?php echo $mission_item['title']?></a></span>
				</div>
				<div class="mission-right">
					admin
				</div>
			</div>
			<?php endforeach; ?>
			
		</div>
	</div>
</div>
</div>