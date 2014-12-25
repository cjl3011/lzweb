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