
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
	width: 1000px;
	height: 500px;
	float: left;
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
			<ol>
			<?php foreach ($pubList as $mission_item): ?>
   			<li>
   				<a href="http://localhost/lzweb/index.php/mission_reply/index/<?php echo $mission_item['mid']?>"><?php echo $mission_item['title']?></a>
   			</li>
			<?php endforeach ?>
			</ol>
		</div>
	</div>
		
	
</body>
</html>