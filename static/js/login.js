var Login = {
	init: function(){
		$("#login-btn").bind("click", function(){
			Login.username = $("#login-username").val();
			Login.password = $("#login-password").val();
			Login.submit();
		});
	},
	submit: function(){
		if(Login.valid()){
			$.ajax({
				"type": "POST",
				"url": "/lzweb/index.php/login/get_result",
				"data": "username="+Login.username+"&password="+Login.password,
				"dataType": "json",
				"success": function(data){
					if(data.result){
						location.replace("/lzweb/index.php/home");
					}
					else{
						alert("用户名或密码不正确！");
					}
				}
			});
		}
	},
	valid: function(){
		if(!Login.username){
			alert("用户名不能为空！");
			return 0;
		}
		if(!Login.password){
			alert("密码不能为空！");
			return 0;
		}
		return 1;
	}
}

var Register = {
	init: function(){
		$("#register-btn").bind("click", function(){
			Register.username = $("#register-username").val();
			Register.password = $("#register-password").val();
			Register.confirm = $("#register-confirm").val();
			Register.submit();
		});
	},
	submit: function(){
		if(Register.valid()){
			$.ajax({
				"type": "POST",
				"url": "/lzweb/index.php/register/get_result",
				"data": "username="+Register.username+"&password="+Register.password,
				"dataType": "json",
				"success": function(data){
					if(data.result == 1){
						alert("注册成功！");
						location.replace("/lzweb/index.php/login");
					}
					else if(data.result == 2){
						alert("用户名已存在！");
					}
					else {
						alert('注册失败！');
					}
				}
			});
		}
	},
	valid: function(){
		if(!Register.username){
			alert("用户名不能为空！");
			return 0;
		}
		if(!Register.password){
			alert("密码不能为空！");
			return 0;
		}
		if(!Register.confirm){
			alert("验证密码不能为空！");
			return 0;
		}
		if(Register.confirm != Register.password){
			alert("两次输入的密码不同！");
			return 0;
		}
		return 1;
	}
}