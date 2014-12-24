var Reply = {
	init: function(){
		$("#reply-btn").bind("click", function(){;
			Reply.content = $("#area").val();
			Reply.hidden = $("#hidden-name").is(":checked");
			Reply.mid = $("#mid").val();
			Reply.submit();
		});
		
	},
	submit: function(){
		if(Reply.valid()){
			$.ajax({
				"type": "POST",
				"url": "/lzweb/index.php/mission_reply/reply",
				"data": "content="+Reply.content+"&hidden="+Reply.hidden+"&mid="+Reply.mid,
				"dataType": "json",
				"success": function(data){
					if(data.result){
						location.replace("/lzweb/index.php/mission_reply/index/"+Reply.mid);
					}
					else{
						alert("发布失败！");
					}
				}
			});
		}
	},
	valid: function(){
		if(!Reply.content){
			alert("回复内容不能为空！");
			return 0;
		}
		return 1;
	}
}