<script type="text/javascript" src="http://localhost/lzweb/static/js/page.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
		Shine.init();
		Page.init();
    });
</script>

	<div class="main">
		<div class="main-header">

			<span class="sub-title">首页--><?php echo $name?>任务</span>

			<div style="float: right">
				<a class="middle-blue-button" href="http://localhost/lzweb/index.php/pub_mission">我要发布任务</a>
			</div>
		</div>
		<div class="main-body">
			<div class="sort-handler">

			<!--
				<a class="sort-element">默认排序</a>
				<a class="sort-element">按时间排序</a>
			-->
			<ul class="nav nav-tabs" role="tablist">
  				<li role="presentation" class="active"><a href="#home" role="tab" data-toggle="tab">默认排序</a></li>
  				<li role="presentation" ><a href="#profile" role="tab" data-toggle="tab">按时间排序</a></li>
			</ul>
			</div>
			
			<div class="tab-content">
				<input type="hidden" id="tid" value="<?php echo $tid;?>"/>
  				<div role="tabpanel" class="tab-pane active" id="home">
					<div id="mission-list"></div>
					<div class="handler-area">
						<a href="javascript:void(0)" id="pre-btn" class="page-handler-element">上一页</a>
						<a class="page-handler-element">
							<span id="current">1</span>/<span id="total">10</span>
						</a>
						<a href="javascript:void(0)" id="next-btn" class="page-handler-element">下一页</a>
					</div>
  				</div>
				</div>
		</div>
	</div>