<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="keyword" content="">
    <meta name="description" content="eBay, Amazon, 商品搬家, 一键上传">
    <meta name="author" content="elyot">
    <link type="text/css" href="../static/css/style.css" rel="stylesheet">
    <link type="text/css" href="../static/css/layout/header.css" rel="stylesheet">
    <link type="text/css" href="../static/css/layout/main.css" rel="stylesheet">
    <link type="text/css" href="../static/css/personal.css" rel="stylesheet">
	<script type="text/javascript" src="../static/js/jquery.js"></script>
	<script type="text/javascript" src="http://localhost/lzweb/static/js/jquery.js"></script>
	<script type="text/javascript" src="http://localhost/lzweb/static/js/change.js"></script>
	<script type="text/javascript" src="http://localhost/lzweb/static/js/change2.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
		
		/*$("#register-tab").click(function(){
			$("#login-body").css({"display": "none"});
			$("#register-body").css({"display": "block"});
			$("#flag").animate({"left": "550px"}, 500);
		});
		$("#login-tab").click(function(){
			$("#register-body").css({"display": "none"});
			$("#login-body").css({"display": "block"});
			$("#flag").animate({"left": "150px"}, 500);
		});*/
		 $("#my-personal").css({"display": "block"});
		 $(".operation-element").click(choose_tab);
        function choose_tab(event){
            $(".operation-body").css({"display": "none"});
            $(".operation-element").attr({"class": "operation-element"});
            var target_body = "#my-"+$(event.target).attr("id");
            $(event.target).attr({"class": "operation-element active"});
            console.log(target_body)
            $(target_body).css({"display": "block"});
        }
		User_information.init();
		Nick_information.init();
       
    });
    </script>
</head>
<body>
    <div id="banner"></div>
    <div class="main">
        <div></div>
        <h2 class="operation-banner">
            <a class="operation-element active" href="javascript:void(0)" id="personal">个人信息</a>
            <a class="operation-element" href="javascript:void(0)" id="mission">我的任务</a>
			<a class="operation-element" href="javascript:void(0)" id="reply">我的回复</a>
		</h2>
        
		<div class="operation-body" id="my-personal">
            <div class="desc-list">
                <span class="float-left">用户</span>
                <span class="float-left"><?php echo $login_user['username']?></span>
            </div>
            <div class="desc-list">
                <span class="float-left">昵称<?php echo $login_user['nickname']?></span>
            </div>
            <div class="desc-list" id="modify-nick-area">
                <span class="float-left">修改昵称为</span>
                <input  type="text" id="change-nickname" placeholder="输入昵称"class="float-left user-input" />
            </div>
            <div id="modify-password-area">
                <div class="desc-list" id="modify-nick-area">
                    <span class="float-left">请输入密码</span>
                    <input type="password" id="change-password" placeholder="输入密码" class="float-left user-input" />
                </div>
                <div class="desc-list" id="modify-nick-area">
                    <span class="float-left">请再次输入</span>
                    <input  type="password" id="change-confirmpassword" placeholder="再次输入" class="float-left user-input" />
                </div>
            </div>
            <div class="desc-list">
                <a href="javascript:void(0)" class="middle-blue-button" id="change-button2">修改昵称</a>
                <a href="javascript:void(0)" class="middle-blue-button" id="change-button1">修改密码</a>
            </div>
        </div>
		
		
        <div class="operation-body" id="my-mission">
				<?php if(isset($user_mission)):?>
				<?php foreach ($user_mission as $mission_item):?>
			<div class="desc-list">
               
				<span class="float-left">任务名称：
				<?php echo $mission_item['title']?></span>
				<a href="http://localhost/lzweb/index.php/user_information/delete_mission/<?php echo $mission_item['mid']?>">删除任务</a>
               
				<span class="float-right">2014-12-24 21:47:09</span>
				
				
            </div>
				<?php endforeach ?>
				<?php endif;?>	
        </div>
		
				
					
        <div class="operation-body" id="my-reply">
            <?php if(isset($user_reply)):?>
			<?php foreach ($user_reply as $user):?>
			<div class="desc-list">
                <span class="float-left">回复名称</span>
                <?php echo $user['content']?>
				<a href="http://localhost/lzweb/index.php/user_information/delete_reply/<?php echo $user['mid']?>">删除回复</a>
                <span class="float-right">2014-12-24 21:47:09</span>
            </div>
			<?php endforeach ?>
			<?php endif;?>	
		

        </div>
    </div>
</body>
</html>
