var User_information = {
	init: function(){
		$("#change-button1").bind("click", function(){
			User_information.password = $("#change-password").val();
			User_information.confirm = $("#change-confirmpassword").val();
			User_information.submit();
			
		});
	},
	submit: function(){
		if(User_information.valid()){
			$.ajax({
				"type": "POST",
				"url": "/lzweb/index.php/user_information/change_password",
				"data": "password="+User_information.password+"&confirm="+User_information.confirm,
				"dataType": "json",
				"success": function(data){
					if(data.result){
						location.replace("/lzweb/index.php/user_information");
						alert('修改成功')
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


