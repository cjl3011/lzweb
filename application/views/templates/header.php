<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="keyword" content="">
    <meta name="description" content="">
    <meta name="author" content="elyot">
    <link type="text/css" href="http://localhost/lzweb/static/css/style.css" rel="stylesheet">
    <link type="text/css" href="http://localhost/lzweb/static/css/layout/header.css" rel="stylesheet">
    <link type="text/css" href="http://localhost/lzweb/static/css/layout/main.css" rel="stylesheet">
    <link type="text/css" href="http://localhost/lzweb/static/css/mission/mission.css" rel="stylesheet">
	<title><?php echo $title;?></title>
    <link type="text/css" href="http://localhost/lzweb/static/css/type.css" rel="stylesheet">
	<script type="text/javascript" src="http://localhost/lzweb/static/js/jquery.js"></script>
	<script type="text/javascript"> 
    $(document).ready(function(){
		$('.bink').each(function(){
			var color1 = "#fe7519";
			var color2 = "#7FFF00";
			var color3 = "#FFD700";
			if(color1 && color2){
				var index = 0, colors = [color1, color2,color3], me = $(this);

				setInterval(function(){
					me.css({color:colors[index++]});
					index = index > 2 ? 0 : index;
				}, 200);
			}
		});
    });    
</script>
</head>
<body>
	<div class="header">
		<div class="header-content">
			<a id="logo" href="index.php">LzWeb</a>
			<?php if(isset($this->session->userdata)):?>
				<a href="<?php echo base_url('user_information')?>" class="login-btn">欢迎您，<?php echo $this->session->userdata['nickname'];?></a>
			<?php else:?>
				<a href="http://localhost/lzweb/index.php/login" class="login-btn">登录/注册</a>
			<?php endif;?>
		</div>
	</div>
	<div class="nav">
		<div class="nav-column">
			<div class="nav-row">
			<?php foreach ($theme as $theme_item): ?>
   			<a class="nav-element bink" href="http://localhost/lzweb/index.php/topic_mission/index/<?php echo $theme_item['tid']?>"><?php echo $theme_item['name']?></a>

			<?php endforeach ?>
			</div>
			<div class="nav-row">
			<?php foreach ($theme as $theme_item): ?>
   			<a class="nav-element" href="http://localhost/lzweb/index.php/topic_mission/index/<?php echo $theme_item['tid']?>"><?php echo $theme_item['name']?></a>

			<?php endforeach ?>
			</div>
			<div class="nav-row">
			<?php foreach ($theme as $theme_item): ?>
   			<a class="nav-element" href="http://localhost/lzweb/index.php/topic_mission/index/<?php echo $theme_item['tid']?>"><?php echo $theme_item['name']?></a>

			<?php endforeach ?>
			</div>
		</div>
		<div class="seq"></div>
		<div class="nav-column">
			<div class="nav-row">
			<?php foreach ($theme as $theme_item): ?>
   			<a class="nav-element" href="http://localhost/lzweb/index.php/topic_mission/index/<?php echo $theme_item['tid']?>"><?php echo $theme_item['name']?></a>

			<?php endforeach ?>
			</div>
			<div class="nav-row">
			<?php foreach ($theme as $theme_item): ?>
   			<a class="nav-element" href="http://localhost/lzweb/index.php/topic_mission/index/<?php echo $theme_item['tid']?>"><?php echo $theme_item['name']?></a>

			<?php endforeach ?>
			</div>
			<div class="nav-row">
			<?php foreach ($theme as $theme_item): ?>
   			<a class="nav-element" href="http://localhost/lzweb/index.php/topic_mission/index/<?php echo $theme_item['tid']?>"><?php echo $theme_item['name']?></a>

			<?php endforeach ?>
			</div>
		</div>
		<div class="seq"></div>
		<div class="nav-column">
			<div class="nav-row">
			<?php foreach ($theme as $theme_item): ?>
   			<a class="nav-element" href="http://localhost/lzweb/index.php/topic_mission/index/<?php echo $theme_item['tid']?>"><?php echo $theme_item['name']?></a>

			<?php endforeach ?>
			</div>
			<div class="nav-row">
			<?php foreach ($theme as $theme_item): ?>
   			<a class="nav-element" href="http://localhost/lzweb/index.php/topic_mission/index/<?php echo $theme_item['tid']?>"><?php echo $theme_item['name']?></a>

			<?php endforeach ?>
			</div>
			<div class="nav-row">
			<?php foreach ($theme as $theme_item): ?>
   			<a class="nav-element" href="http://localhost/lzweb/index.php/topic_mission/index/<?php echo $theme_item['tid']?>"><?php echo $theme_item['name']?></a>

			<?php endforeach ?>
			</div>
		</div>
		<div class="seq"></div>		
		<div class="nav-column">
			<div class="nav-row">
			<?php foreach ($theme as $theme_item): ?>
   			<a class="nav-element" href="http://localhost/lzweb/index.php/topic_mission/index/<?php echo $theme_item['tid']?>"><?php echo $theme_item['name']?></a>

			<?php endforeach ?>
			</div>
			<div class="nav-row">
			<?php foreach ($theme as $theme_item): ?>
   			<a class="nav-element" href="http://localhost/lzweb/index.php/topic_mission/index/<?php echo $theme_item['tid']?>"><?php echo $theme_item['name']?></a>

			<?php endforeach ?>
			</div>
			<div class="nav-row">
			<?php foreach ($theme as $theme_item): ?>
   			<a class="nav-element" href="http://localhost/lzweb/index.php/topic_mission/index/<?php echo $theme_item['tid']?>"><?php echo $theme_item['name']?></a>

			<?php endforeach ?>
			</div>
		</div>
		<div class="seq"></div>
		<div class="nav-column">
			<div class="nav-row">
			<?php foreach ($theme as $theme_item): ?>
   			<a class="nav-element" href="http://localhost/lzweb/index.php/topic_mission/index/<?php echo $theme_item['tid']?>"><?php echo $theme_item['name']?></a>

			<?php endforeach ?>
			</div>
			<div class="nav-row">
			<?php foreach ($theme as $theme_item): ?>
   			<a class="nav-element" href="http://localhost/lzweb/index.php/topic_mission/index/<?php echo $theme_item['tid']?>"><?php echo $theme_item['name']?></a>

			<?php endforeach ?>
			</div>
			<div class="nav-row">
			<?php foreach ($theme as $theme_item): ?>
   			<a class="nav-element" href="http://localhost/lzweb/index.php/topic_mission/index/<?php echo $theme_item['tid']?>"><?php echo $theme_item['name']?></a>

			<?php endforeach ?>
			</div>
		</div>
		<div class="seq"></div>
		<div class="nav-column">
			<div class="nav-row">
			<?php foreach ($theme as $theme_item): ?>
   			<a class="nav-element" href="http://localhost/lzweb/index.php/topic_mission/index/<?php echo $theme_item['tid']?>"><?php echo $theme_item['name']?></a>

			<?php endforeach ?>
			</div>
			<div class="nav-row">
			<?php foreach ($theme as $theme_item): ?>
   			<a class="nav-element" href="http://localhost/lzweb/index.php/topic_mission/index/<?php echo $theme_item['tid']?>"><?php echo $theme_item['name']?></a>

			<?php endforeach ?>
			</div>
			<div class="nav-row">
			<?php foreach ($theme as $theme_item): ?>
   			<a class="nav-element" href="http://localhost/lzweb/index.php/topic_mission/index/<?php echo $theme_item['tid']?>"><?php echo $theme_item['name']?></a>

			<?php endforeach ?>
			</div>
		</div>
		<div class="seq"></div>
		<div class="nav-column">
			<div class="nav-row">
			<?php foreach ($theme as $theme_item): ?>
   			<a class="nav-element" href="http://localhost/lzweb/index.php/topic_mission/index/<?php echo $theme_item['tid']?>"><?php echo $theme_item['name']?></a>

			<?php endforeach ?>
			</div>
			<div class="nav-row">
			<?php foreach ($theme as $theme_item): ?>
   			<a class="nav-element" href="http://localhost/lzweb/index.php/topic_mission/index/<?php echo $theme_item['tid']?>"><?php echo $theme_item['name']?></a>

			<?php endforeach ?>
			</div>
			<div class="nav-row">
			<?php foreach ($theme as $theme_item): ?>
   			<a class="nav-element" href="http://localhost/lzweb/index.php/topic_mission/index/<?php echo $theme_item['tid']?>"><?php echo $theme_item['name']?></a>

			<?php endforeach ?>
			</div>
		</div>
		<div style="padding-right: 22px; text-align: right">
			<a href="#more">查看更多项目</a>
		</div>
	</div>
  