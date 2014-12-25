 <link type="text/css" href="http://localhost/lzweb/static/css/admin.css" rel="stylesheet">
 <script type="text/javascript" src="http://localhost/lzweb/static/js/admin.js"></script>
 <div class="main">
        <div class="sidebar">
            <a class="menu active" href="javascript:void(0)">任务管理</a>
            <a class="menu normal" href="javascript:void(0)">会员管理</a>            
        </div>
        <div class="workspace">
            <h1>任务管理</h1>
            <div class="workspace-content">
                <div class="workspace-part">
                    <h3>请选择一个主题类别</h3>
                    <select id="select-item">
					<?php if(isset($theme)):?>
                        <?php foreach ($theme as $theme_item): ?>
							<option value="<?php echo $theme_item['tid']?>"><?php echo $theme_item['name']?></a></option>
						<?php endforeach ?>
					<?php endif;?>
                    </select>
                </div>
                <div class="workspace-part">
				<h3>该主题类别的任务列表</h3>
				<table>
					<tr>
						<th>编号</th>
						<th>任务名称</th>
						<th>操作</th>
					</tr>
					<?php if(isset($missions)):?>
					<?php foreach ($missions as $mission_item): ?>
					<tr>
						<td class="td25"><?php echo $mission_item['mid']?></td>
						<td class="td50"><?php echo $mission_item['title']?></td>
						<td class="td25">
							<a href="http://localhost/lzweb/index.php/mission_reply/index/<?php echo $mission_item['mid']?>" class="small-blue-button">查看该任务</a>
						</td>
					</tr>
					<?php endforeach ?>
					<?php endif;?>
				</table>
			</div>
            </div>
        </div>
    </div>


<!--		
<?php if(isset($users)):?>
会员列表：
<?php foreach ($users as $user): ?>

    <h2><?php echo $user['username']?></h2><a href="http://localhost/lzweb/index.php/admin/delete/<?php echo $user['uid']?>">删除</a>
    
<?php endforeach ?>
<?php endif;?>
-->