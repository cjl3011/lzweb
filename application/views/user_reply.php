<?php foreach ($user_reply as $mission_item): ?>

    <h2><a href="http://localhost/lzweb/index.php/mission_reply/index/<?php echo $mission_item['mid']?>"><?php echo $mission_item['replycontent']?></a></h2>
    
<?php endforeach ?>