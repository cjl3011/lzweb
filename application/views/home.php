
<html>
<head>
<style type="text/css">
	#center {
	width:1000px;
	float:left;
}
#null {
	width:100%;
	height:160px;
	text-align:center;
}
#zero {
	width:1000px;
	height:100px;
	margin:auto;
	padding-top:10px;
}
#topic {
	width:1000px;
	height:90px;
	margin:auto;
	padding-top:10px;
	background-image:url(http://localhost/lzweb/Images/context.png);
}

#first {
	width:1000px;
	height:340px;
	margin:auto;
	padding-top:10px;
}
#login {
	width: 480px;
	height: 320px;
	float: left;
	background-image:url(http://localhost/lzweb/Images/context.png);
	padding-top:20px;
	padding-left:15px;
}
#context {
	width:480px;
	height:320px;
	float:right;
	background-image:url(http://localhost/lzweb/Images/context.png);
	padding-top:20px;
	padding-left:15px;
}
#text {
	width:300px;
	height:320px;
	float:left;
}
#ima {
	width:400px;
	height:320px;
	float:right;
	padding-top:20px;
}
#second {
	width:1000px;
	height:400px;
	margin:auto;
	padding-top:10px;
}
#left {
	width: 480px;
	height: 320px;
	float: left;
	background-image:url(http://localhost/lzweb/Images/context.png);
	padding-top:20px;
	padding-left:15px;
}
#right {
	width:480px;
	height:320px;
	float:right;
	background-image:url(http://localhost/lzweb/Images/context.png);
	padding-top:20px;
	padding-left:15px;
}

</style>
<title>home</title>
</head>
	<body>
	<div id="null">
		<img src="http://localhost/lzweb/Images/head.jpg" width="1000px"/>
	</div>
	<div id="zero">
		<div id="topic"> 

		<?php foreach ($theme as $theme_item): ?>
   			<a href="http://localhost/lzweb/index.php/mission_reply/index/1"><?php echo $theme_item['name']?></a>
		<?php endforeach ?>
		</div>
	</div>
	<div id="first">
		<div id="login">
		<h2>赏金排行</h2>
			<ol>
			<?php foreach ($payList as $mission_item): ?>
   			<li>
   				<a href="http://localhost/lzweb/index.php/mission_reply/index/<?php echo $mission_item['mid']?>"><?php echo $mission_item['title']?></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $mission_item['payment']?>
   			</li>
			<?php endforeach ?>
			</ol>
		</div>
		<div id="context">
		<h2>最近上传</h2>
			<ol>
			<?php foreach ($pubList as $mission_item): ?>
   			<li>
   				<a href="http://localhost/lzweb/index.php/mission_reply/index/<?php echo $mission_item['mid']?>"><?php echo $mission_item['title']?></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $mission_item['pubtime']?>
   			</li>
			<?php endforeach ?>
			</ol>
		</div>
	</div>
		
	<div id="second">
		<div id="left">
		<h2>点赞排行</h2>
			<ol>
			<?php foreach ($goodList as $mission_item): ?>
   			<li>
   				<a href="http://localhost/lzweb/index.php/mission_reply/index/<?php echo $mission_item['mid']?>"><?php echo $mission_item['title']?></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $mission_item['goodcount']?>
   			</li>
			<?php endforeach ?>
			</ol>
		</div>
		
		<div id="right">
		<h2>得分排行</h2>
			<ol>
			<?php foreach ($gradeList as $mission_item): ?>
   			<li>
   				<a href="http://localhost/lzweb/index.php/mission_reply/index/<?php echo $mission_item['mid']?>"><?php echo $mission_item['title']?></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $mission_item['grade']?>
   			</li>
			<?php endforeach ?>
			</ol>
		</div>
	</div>
</body>
</html>