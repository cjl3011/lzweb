var Login = {
	init: function(){
		$("#login-btn").bind("click", function(){
			Login.username = $("#login-username").val();
			Login.password = $("#login-password").val();
			Login.submit();
		});
	},
	submit: function(){
		Login.valid();
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
	}
}