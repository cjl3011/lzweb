var Apply_topic = {
	init: function(){
		$("#app-btn").bind("click", function(){
			Apply_topic.title = $("#topic-theme").val();
			Apply_topic.submit();
		});
	},
	submit: function(){
		if(Apply_topic.valid()){
			$.ajax({
				"type": "POST",
				"url": "/lzweb/index.php/Apply_topic/get_result",
				"data": "theme="+Apply_topic.title,
				"dataType": "json",
				"success": function(data){
					if(data.result){
						location.replace("/lzweb/index.php/mission_list");
					} else{
						alert("发布失败！");
					}
				}
			});
		}
	},
	valid: function(){
		if(!Apply_topic.title){
			alert("申请主题不能为空！");
			return 0;
		}
		return 1;
	}
}
