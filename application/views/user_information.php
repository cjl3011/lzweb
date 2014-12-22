<?php if(isset($login_user)):?>
个人信息：<br/>
用户名：<?php echo $login_user['username']?>
昵称：<?php echo $login_user['username']?>

<?php endif;?>

<?php if(isset($user_mission)):?>
任务列表：
<?php foreach ($user_mission as $mission_item): ?>

    <h2><a href="http://localhost/lzweb/index.php/mission_reply/index/<?php echo $mission_item['mid']?>"><?php echo $mission_item['title']?></a></h2>
    
<?php endforeach ?>
<?php endif;?>

<?php if(isset($user_reply)):?>
回复列表：
<?php foreach ($user_reply as $user): ?>

   <h2><a href="http://localhost/lzweb/index.php/mission_reply/index/<?php echo $user['mid']?>"><?php echo $user['replycontent']?></a></h2>
    
<?php endforeach ?>
<?php endif;?>