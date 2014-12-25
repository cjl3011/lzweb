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
			<span class="sub-title">需求榜</span>
		</div>
		<div class="main-body">
			<div class="sort-handler">
				<a class="sort-element">默认排序</a>
			</div>
			<?php foreach ($payList as $mission_item): ?>
			<div class="mission_sort">
				<div class="mission-left_sort">
					<span class="mission-title"><a href="http://localhost/lzweb/index.php/mission_reply/index/<?php echo $mission_item['mid']?>"><?php echo $mission_item['title']?></a></span>
				</div>
				<div class="mission-right">
					<?php echo $mission_item['payment']?>
				</div>
			</div>
			<?php endforeach; ?>
			
		</div>
	</div>
</div>
<div id="context">
	<div class="main_sort">
		<div class="main-header">
			<span class="sub-title">创建榜</span>
		</div>
		<div class="main-body">
			<div class="sort-handler">
				<a class="sort-element">默认排序</a>
			</div>
			<?php foreach ($pubList as $mission_item): ?>
			<div class="mission_sort">
				<div class="mission-left_sort">
					<span class="mission-title"><a href="http://localhost/lzweb/index.php/mission_reply/index/<?php echo $mission_item['mid']?>"><?php echo $mission_item['title']?></a></span>
				</div>
				<div class="mission-right">
					<?php echo $mission_item['pubtime']?>
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
			<span class="sub-title">共建榜</span>
		</div>
		<div class="main-body">
			<div class="sort-handler">
				<a class="sort-element">默认排序</a>
			</div>
			<?php foreach ($pubList as $mission_item): ?>
			<div class="mission_sort">
				<div class="mission-left_sort">
					<span class="mission-title"><a href="http://localhost/lzweb/index.php/mission_reply/index/<?php echo $mission_item['mid']?>"><?php echo $mission_item['title']?></a></span>
				</div>
				<div class="mission-right">
					<?php echo $mission_item['pubtime']?>
				</div>
			</div>
			<?php endforeach; ?>
			
		</div>
	</div>
</div>
<div id="right">
	<div class="main_sort">
		<div class="main-header">
			<span class="sub-title">能量榜</span>
		</div>
		<div class="main-body">
			<div class="sort-handler">

				<ul class="nav nav-tabs" role="tablist">
  					<li role="presentation" class="active"><a href="#home" role="tab" data-toggle="tab">默认排序</a></li>
  					<li role="presentation" ><a href="#profile" role="tab" data-toggle="tab">按时间排序</a></li>
  					<li role="presentation"><a href="#messages" role="tab" data-toggle="tab">按点赞排序</a></li>
				</ul>

				
				<div class="tab-content">
  					<div role="tabpanel" class="tab-pane active" id="home">
  						
						<?php foreach ($pubList as $mission_item): ?>
						<div class="mission_sort">
							<div class="mission-left_sort">
								<span class="mission-title"><a href="http://localhost/lzweb/index.php/mission_reply/index/<?php echo $mission_item['mid']?>"><?php echo $mission_item['title']?></a></span>
							</div>
							<div class="mission-right">
								<?php echo $mission_item['pubtime']?>
							</div>
						</div>
						<?php endforeach; ?>

  					</div>
  					<div role="tabpanel" class="tab-pane" id="profile">
  						
						<?php foreach ($payList as $mission_item): ?>
						<div class="mission_sort">
							<div class="mission-left_sort">
								<span class="mission-title"><a href="http://localhost/lzweb/index.php/mission_reply/index/<?php echo $mission_item['mid']?>"><?php echo $mission_item['title']?></a></span>
							</div>
							<div class="mission-right">
								<?php echo $mission_item['payment']?>
							</div>
						</div>
						<?php endforeach; ?>

  					</div>
  					<div role="tabpanel" class="tab-pane" id="messages">
  						
						<?php foreach ($goodList as $mission_item): ?>
						<div class="mission_sort">
							<div class="mission-left_sort">
								<span class="mission-title"><a href="http://localhost/lzweb/index.php/mission_reply/index/<?php echo $mission_item['mid']?>"><?php echo $mission_item['title']?></a></span>
							</div>
							<div class="mission-right">
								<?php echo $mission_item['goodcount']?>
							</div>
						</div>
						<?php endforeach; ?>

  					</div>

				</div>

			</div>
			
		</div>
	</div>
</div>
</div>