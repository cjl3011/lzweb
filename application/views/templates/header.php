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
	<script type="text/javascript" src="http://www.codefans.net/ajaxjs/jquery-1.4.2.min.js"></script>
	<script type="text/javascript" src="http://localhost/lzweb/static/js/shine.js" rel="stylesheet"> </script>
</head>
<body>
	<div class="header">
		<div class="header-content">
			<a id="logo" href="http://localhost/lzweb/index.php/home">LzWeb</a>
			<?php if(isset($this->session->userdata['uid'])):?>
				<a class="login-btn">欢迎您，<?php echo $this->session->userdata['nickname'];?></a>
			<?php else:?>
			<a href="http://localhost/lzweb/index.php/login" class="login-btn">登录/注册</a>
			<?php endif;?>
		</div>
	</div>
	<div class="nav">
		<div class="nav-column">
			<div class="nav-row">
			<?php for($i = 0 ; $i < 3 ; $i ++): ?>
   			<a class="nav-element bink" href="http://localhost/lzweb/index.php/mission_list/index/<?php echo $theme[$i]['tid']?>"><?php echo $theme[$i]['name']?></a>

			<?php endfor ?>
			</div>
			<div class="nav-row">
			<?php for($i = 0 ; $i < 3 ; $i ++): ?>
   			<a class="nav-element" href="http://localhost/lzweb/index.php/mission_list/index/<?php echo $theme[$i]['tid']?>"><?php echo $theme[$i]['name']?></a>

			<?php endfor ?>
			</div>
			<div class="nav-row">
			<?php for($i = 0 ; $i < 3 ; $i ++): ?>
   			<a class="nav-element" href="http://localhost/lzweb/index.php/mission_list/index/<?php echo $theme[$i]['tid']?>"><?php echo $theme[$i]['name']?></a>

			<?php endfor ?>
			</div>
		</div>
		<div class="seq"></div>
		<div class="nav-column">
			<div class="nav-row">
			<?php for($i = 0 ; $i < 3 ; $i ++): ?>
   			<a class="nav-element" href="http://localhost/lzweb/index.php/mission_list/index/<?php echo $theme[$i]['tid']?>"><?php echo $theme[$i]['name']?></a>

			<?php endfor ?>
			</div>
			<div class="nav-row">
			<?php for($i = 0 ; $i < 3 ; $i ++): ?>
   			<a class="nav-element" href="http://localhost/lzweb/index.php/mission_list/index/<?php echo $theme[$i]['tid']?>"><?php echo $theme[$i]['name']?></a>

			<?php endfor ?>
			</div>
			<div class="nav-row">
			<?php for($i = 0 ; $i < 3 ; $i ++): ?>
   			<a class="nav-element" href="http://localhost/lzweb/index.php/mission_list/index/<?php echo $theme[$i]['tid']?>"><?php echo $theme[$i]['name']?></a>

			<?php endfor ?>
			</div>
		</div>
		<div class="seq"></div>
		<div class="nav-column">
			<div class="nav-row">
			<?php for($i = 0 ; $i < 3 ; $i ++): ?>
   			<a class="nav-element" href="http://localhost/lzweb/index.php/mission_list/index/<?php echo $theme[$i]['tid']?>"><?php echo $theme[$i]['name']?></a>

			<?php endfor ?>
			</div>
			<div class="nav-row">
			<?php for($i = 0 ; $i < 3 ; $i ++): ?>
   			<a class="nav-element" href="http://localhost/lzweb/index.php/mission_list/index/<?php echo $theme[$i]['tid']?>"><?php echo $theme[$i]['name']?></a>

			<?php endfor ?>
			</div>
			<div class="nav-row">
			<?php for($i = 0 ; $i < 3 ; $i ++): ?>
   			<a class="nav-element" href="http://localhost/lzweb/index.php/mission_list/index/<?php echo $theme[$i]['tid']?>"><?php echo $theme[$i]['name']?></a>

			<?php endfor ?>
			</div>
		</div>
		<div class="seq"></div>		
		<div class="nav-column">
			<div class="nav-row">
			<?php for($i = 0 ; $i < 3 ; $i ++): ?>
   			<a class="nav-element" href="http://localhost/lzweb/index.php/mission_list/index/<?php echo $theme[$i]['tid']?>"><?php echo $theme[$i]['name']?></a>

			<?php endfor ?>
			</div>
			<div class="nav-row">
			<?php for($i = 0 ; $i < 3 ; $i ++): ?>
   			<a class="nav-element" href="http://localhost/lzweb/index.php/mission_list/index/<?php echo $theme[$i]['tid']?>"><?php echo $theme[$i]['name']?></a>

			<?php endfor ?>
			</div>
			<div class="nav-row">
			<?php for($i = 0 ; $i < 3 ; $i ++): ?>
   			<a class="nav-element" href="http://localhost/lzweb/index.php/mission_list/index/<?php echo $theme[$i]['tid']?>"><?php echo $theme[$i]['name']?></a>

			<?php endfor ?>
			</div>
		</div>
		<div class="seq"></div>
		<div class="nav-column">
			<div class="nav-row">
			<?php for($i = 0 ; $i < 3 ; $i ++): ?>
   			<a class="nav-element" href="http://localhost/lzweb/index.php/mission_list/index/<?php echo $theme[$i]['tid']?>"><?php echo $theme[$i]['name']?></a>

			<?php endfor ?>
			</div>
			<div class="nav-row">
			<?php for($i = 0 ; $i < 3 ; $i ++): ?>
   			<a class="nav-element" href="http://localhost/lzweb/index.php/mission_list/index/<?php echo $theme[$i]['tid']?>"><?php echo $theme[$i]['name']?></a>

			<?php endfor ?>
			</div>
			<div class="nav-row">
			<?php for($i = 0 ; $i < 3 ; $i ++): ?>
   			<a class="nav-element" href="http://localhost/lzweb/index.php/mission_list/index/<?php echo $theme[$i]['tid']?>"><?php echo $theme[$i]['name']?></a>

			<?php endfor ?>
			</div>
		</div>
		<div class="seq"></div>
		<div class="nav-column">
			<div class="nav-row">
			<?php for($i = 0 ; $i < 3 ; $i ++): ?>
   			<a class="nav-element" href="http://localhost/lzweb/index.php/mission_list/index/<?php echo $theme[$i]['tid']?>"><?php echo $theme[$i]['name']?></a>

			<?php endfor ?>
			</div>
			<div class="nav-row">
			<?php for($i = 0 ; $i < 3 ; $i ++): ?>
   			<a class="nav-element" href="http://localhost/lzweb/index.php/mission_list/index/<?php echo $theme[$i]['tid']?>"><?php echo $theme[$i]['name']?></a>

			<?php endfor ?>
			</div>
			<div class="nav-row">
			<?php for($i = 0 ; $i < 3 ; $i ++): ?>
   			<a class="nav-element" href="http://localhost/lzweb/index.php/mission_list/index/<?php echo $theme[$i]['tid']?>"><?php echo $theme[$i]['name']?></a>

			<?php endfor ?>
			</div>
		</div>
		<div class="seq"></div>
		<div class="nav-column">
			<div class="nav-row">
			<?php for($i = 0 ; $i < 3 ; $i ++): ?>
   			<a class="nav-element" href="http://localhost/lzweb/index.php/mission_list/index/<?php echo $theme[$i]['tid']?>"><?php echo $theme[$i]['name']?></a>

			<?php endfor ?>
			</div>
			<div class="nav-row">
			<?php for($i = 0 ; $i < 3 ; $i ++): ?>
   			<a class="nav-element" href="http://localhost/lzweb/index.php/mission_list/index/<?php echo $theme[$i]['tid']?>"><?php echo $theme[$i]['name']?></a>

			<?php endfor ?>
			</div>
			<div class="nav-row">
			<?php for($i = 0 ; $i < 3 ; $i ++): ?>
   			<a class="nav-element" href="http://localhost/lzweb/index.php/mission_list/index/<?php echo $theme[$i]['tid']?>"><?php echo $theme[$i]['name']?></a>

			<?php endfor ?>
			</div>
		</div>
		<div style="padding-right: 22px; text-align: right">
			<a href="#more">查看更多项目</a>
		</div>
	</div>
  