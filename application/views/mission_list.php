<?php foreach ($mission as $mission_item): ?>

    <h2><?php echo $mission_item['title'] ?></h2>
    <div>
        <?php echo $mission_item['content'] ?>
    </div>
    
<?php endforeach ?>