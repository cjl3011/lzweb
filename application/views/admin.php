
<?php if(isset($theme)):?>
主题列表：</br>
	<?php foreach ($theme as $theme_item): ?>
		<a href="<?php echo base_url('admin/mission/' . $theme_item['tid'])?>" value="<?php echo $theme_item['tid']?>"><?php echo $theme_item['name']?></a></option>
	<?php endforeach ?>
<?php endif;?>

<?php if(isset($missions)):?>
任务列表：</br>
<?php foreach ($missions as $mission_item): ?>
	<?php echo $mission_item['title']?>
	<a href="http://localhost/lzweb/index.php/mission_reply/index/<?php echo $mission_item['mid']?>" class="small-blue-button">查看该任务</a>
<?php endforeach ?>
<?php endif;?>
				
<?php if(isset($users)):?>
会员列表：
<?php foreach ($users as $user): ?>

    <h2><?php echo $user['username']?></h2><a href="http://localhost/lzweb/index.php/admin/delete/<?php echo $user['uid']?>">删除</a>
    
<?php endforeach ?>
<?php endif;?>
