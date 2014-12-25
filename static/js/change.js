var User_information = {
	init: function(){
		$("#change-button1").bind("click", function(){
			User_information.password = $("#change-password").val();
			User_information.confirm = $("#change_confirmepassword").val();
			User_information.submit();
		});
	},
	submit: function(){
		if(User_information.valid()){
			$.ajax({
				"type": "POST",
				"url": "/lzweb/index.php/user_information/change_password",
				"data": "confirm="+User_information.confirm+"&password="+User_information.password,
				"dataType": "json",
				"success": function(data){
					if(data.result){
						location.replace("/lzweb/index.php/user_information");
					}
					else{
						alert("密码不正确！");
					}
				}
			});
		}
	},
	valid: function(){
		if(!User_information.confirm){
			alert("输入不能为空！");
			return 0;
		}
		if(!User_information.password){
			alert("密码不能为空！");
			return 0;
		}
		return 1;
	}
}

var Nick_information= {
	init: function(){
		$("#change-button2").bind("click", function(){
			Nick_information.nickname = $("#change-nickname").val();
		
			Nick_information.submit();
		});
	},
	submit: function(){
		if(Nick_information.valid()){
			$.ajax({
				"type": "POST",
				"url": "/lzweb/index.php/user_information/change_nickname",
				"data": "username="+Nick_information.username4,
				"dataType": "json",
				"success": function(data){
		
						alert("注册成功！");
						location.replace("/lzweb/index.php/user_information");
			
			});
		}
	},
	valid: function(){
		if(!Nick_information.nickname){
			alert("用户名不能为空！");
			return 0;
		}
		
	}
}