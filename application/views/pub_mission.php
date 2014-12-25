<script type="text/javascript" src="http://localhost/lzweb/static/js/jquery.js"></script>
<script type="text/javascript" src="http://localhost/lzweb/static/js/pub_mission.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
		Pub_mission.init();
		Shine.init();
    });
</script>
<div id="banner"></div>
<div class="main">
	<h2 class="mission-banner">发布项目</h2>
	<div class="mission-content">
		<div class="row">
			<div class="left-label">项目名称：</div>
			<div class="right-input">
				<input class="user-input" id="project-title"/>
			</div>
		</div>
		<div class="row">
			<div class="left-label">项目主题：</div>
			<div class="right-input">
				<input class="user-input" id="project-theme"/>
			</div>
		</div>
		<div class="row">
			<div class="left-label">悬赏金额：</div>
			<div class="right-input">
				<input class="user-input" id="project-payment"/>
			</div>
		</div>
		<div class="row">
			<div class="left-label">项目描述：</div>
			<div class="right-input">
				<div contenteditable="true" id="project-content" class="textarea"></div>
			</div>
		</div>
		<div class="row" style="text-align: center">
			<a href="javascript:void(0)" id="pub-btn" class="middle-blue-button">发布任务</a>
		</div>
	</div>
</div>