<?php if(isset($theme)):?>
任务主题列表：
<?php foreach ($theme as $theme_item): ?>

    <h2><a href="http://localhost/lzweb/index.php/admin/mission/<?php echo $theme_item['tid']?>"><?php echo $theme_item['name']?></a></h2>
    
<?php endforeach ?>
<?php endif;?>

<?php if(isset($mission)):?>
任务列表：
<?php foreach ($mission as $mission_item): ?>

    <h2><a href="http://localhost/lzweb/index.php/mission_reply/index/<?php echo $mission_item['mid']?>"><?php echo $mission_item['title']?></a></h2>
    
<?php endforeach ?>
<?php endif;?>

<?php if(isset($users)):?>
会员列表：
<?php foreach ($users as $user): ?>

    <h2><?php echo $user['username']?></h2><a href="http://localhost/lzweb/index.php/admin/delete/<?php echo $user['uid']?>">删除</a>
    
<?php endforeach ?>
<?php endif;?>