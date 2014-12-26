<script type="text/javascript">
    $(document).ready(function(){
		Shine.init();

    });
</script>

<div id="first">
<div id="login">
	<div class="main_sort">
		<div class="main-header">
			<a href="<?php echo base_url('mission_list');?>" class="sub-title">需求榜</a>
		</div>
		<div class="main-body">
			<div class="sort-handler">
				<a class="sort-element">默认排序</a>
			</div>
			<?php $i = 0 ?>
			<?php foreach ($payList as $mission_item): ?>
			<div class="mission_sort">
				<div class="mission-left_sort">
					<span class="mission-title"><a href="http://localhost/lzweb/index.php/mission_reply/index/<?php echo $mission_item['mid']?>">
						<?php if(mb_strlen($mission_item['title']) > 7):?>
								<?php echo mb_substr($mission_item['title'],0,7) . '...'?></a>
						<?php else:?>
							<?php echo $mission_item['title']?>
						<?php endif;?>
					</span>				
				</div>
				<div class="mission-right">
					<?php echo $mission_item['payment']?>
				</div>
			</div>
			<?php $i++ ?>
			<?php if($i == 5){break;} ?>
			<?php endforeach; ?>
			
		</div>
	</div>
</div>
<div id="context">
	<div class="main_sort">
		<div class="main-header">
			<a href="<?php echo base_url('mission_list');?>" class="sub-title">创建榜</a>
		</div>
		<div class="main-body">
			<div class="sort-handler">
				<a class="sort-element">默认排序</a>
			</div>
			<?php $i = 0 ?>
			<?php foreach ($pubList as $mission_item): ?>
			<div class="mission_sort">
				<div class="mission-left_sort">
					<span class="mission-title"><a href="http://localhost/lzweb/index.php/mission_reply/index/<?php echo $mission_item['mid']?>">
						<?php if(mb_strlen($mission_item['title']) > 7):?>
								<?php echo mb_substr($mission_item['title'],0,7) . '...'?></a>
						<?php else:?>
							<?php echo $mission_item['title']?>
						<?php endif;?>
					</span>	
				</div>
				<div class="mission-right">
					<?php echo $mission_item['pubtime']?>
				</div>
			</div>
			<?php $i++ ?>
			<?php if($i == 5){break;} ?>
			<?php endforeach; ?>
			
		</div>
	</div>
</div>
</div>
<div id="second">
<div id="left">
	<div class="main_sort">
		<div class="main-header">
			<a href="<?php echo base_url('mission_list');?>" class="sub-title">共建榜</a>
		</div>
		<div class="main-body">
			<div class="sort-handler">
				<a class="sort-element">默认排序</a>
			</div>
			<?php $i = 0 ?>
			<?php foreach ($pubList as $mission_item): ?>
			<div class="mission_sort">
				<div class="mission-left_sort">
					<span class="mission-title"><a href="http://localhost/lzweb/index.php/mission_reply/index/<?php echo $mission_item['mid']?>">
						<?php if(mb_strlen($mission_item['title']) > 7):?>
								<?php echo mb_substr($mission_item['title'],0,7) . '...'?></a>
						<?php else:?>
							<?php echo $mission_item['title']?>
						<?php endif;?>
					</span>	
				</div>
				<div class="mission-right">
					<?php echo $mission_item['pubtime']?>
				</div>
			</div>
			<?php $i++; ?>
			<?php if($i == 5){break;} ?>
			<?php endforeach; ?>
			
		</div>
	</div>
</div>
<div id="right">
	<div class="main_sort">
		<div class="main-header">
			<a href="<?php echo base_url('mission_list');?>" class="sub-title">能量榜</a>
		</div>
		<div class="main-body">
			<div class="sort-handler">

				<ul class="nav nav-tabs" role="tablist">
  					<li role="presentation" class="active"><a href="#home" role="tab" data-toggle="tab">默认排序</a></li>
  					<li role="presentation" ><a href="#profile" role="tab" data-toggle="tab">按赏金排序</a></li>
  					<li role="presentation"><a href="#messages" role="tab" data-toggle="tab">按点赞排序</a></li>
				</ul>

				
				<div class="tab-content">
  					<div role="tabpanel" class="tab-pane active" id="home">
  						<?php $i = 0 ?>
						<?php foreach ($pubList as $mission_item): ?>
						<div class="mission_sort">
							<div class="mission-left_sort">
								<span class="mission-title"><a href="http://localhost/lzweb/index.php/mission_reply/index/<?php echo $mission_item['mid']?>">
								<?php if(mb_strlen($mission_item['title']) > 7):?>
									<?php echo mb_substr($mission_item['title'],0,7) . '...'?></a>
								<?php else:?>
									<?php echo $mission_item['title']?>
								<?php endif;?>
								</span>
							</div>
							<div class="mission-right">
								<?php echo $mission_item['pubtime']?>
							</div>
						</div>
						<?php $i++; ?>
						<?php if($i == 5){break;} ?>
						<?php endforeach; ?>

  					</div>
  					<div role="tabpanel" class="tab-pane" id="profile">
  						<?php $i = 0 ?>
						<?php foreach ($payList as $mission_item): ?>
						<div class="mission_sort">
							<div class="mission-left_sort">
								<span class="mission-title"><a href="http://localhost/lzweb/index.php/mission_reply/index/<?php echo $mission_item['mid']?>"><?php echo mb_substr($mission_item['title'],0,9)?></a></span>
							</div>
							<div class="mission-right">
								<?php echo $mission_item['payment']?>
							</div>
						</div>
						<?php $i++ ?>
						<?php if($i == 5){break;} ?>
						<?php endforeach; ?>

  					</div>
  					<div role="tabpanel" class="tab-pane" id="messages">
  						<?php $i = 0 ?>
						<?php foreach ($goodList as $mission_item): ?>
						<div class="mission_sort">
							<div class="mission-left_sort">
								<span class="mission-title"><a href="http://localhost/lzweb/index.php/mission_reply/index/<?php echo $mission_item['mid']?>"><?php echo mb_substr($mission_item['title'],0,9)?></a></span>
							</div>
							<div class="mission-right">
								<?php echo $mission_item['goodcount']?>
							</div>
						</div>
						<?php $i++ ?>
						<?php if($i == 5){break;} ?>
						<?php endforeach; ?>

  					</div>

				</div>

			</div>
			
		</div>
	</div>
</div>
</div>