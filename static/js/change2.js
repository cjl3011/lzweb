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
				"data": "nickname="+Nick_information.nickname,
				"dataType": "json",
				"success": function(data){
		
						alert("修改成功！");
						location.replace("/lzweb/index.php/user_information");
			
			}
		});
	}
},
	valid: function(){
		if(!Nick_information.nickname){
			alert("用户名不能为空！");
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
				"data": "nickname="+Nick_information.nickname,
				"dataType": "json",
				"success": function(data){
		
						alert("修改成功！");
						location.replace("/lzweb/index.php/user_information");
			
			}
		});
	}
},
	valid: function(){
		if(!Nick_information.nickname){
			alert("用户名不能为空！");
			return 0;
		}
		return 1;
	}
}
