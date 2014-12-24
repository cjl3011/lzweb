var Pub_mission = {
	init: function(){
		$("#pub-btn").bind("click", function(){
			Pub_mission.title = $("#project-title").val();
			Pub_mission.theme = $("#project-theme").val();
			Pub_mission.payment = $("#project-payment").val();
			Pub_mission.content = $("#project-content").html();
			Pub_mission.submit();
		});
	},
	submit: function(){
		if(Pub_mission.valid()){
			$.ajax({
				"type": "POST",
				"url": "/lzweb/index.php/pub_mission/get_result",
				"data": "title="+Pub_mission.title+"&theme="+Pub_mission.theme+"&payment="+Pub_mission.payment+"&content="+encodeURIComponent(Pub_mission.content),
				"dataType": "json",
				"success": function(data){
					if(data.result){
						location.replace("/lzweb/index.php/mission_list");
					}
					else{
						alert("发布失败！");
					}
				}
			});
		}
	},
	valid: function(){
		if(!Pub_mission.title){
			alert("项目名称不能为空！");
			return 0;
		}
		if(!Pub_mission.theme){
			alert("项目主题不能为空！");
			return 0;
		}
		if(!Pub_mission.payment){
			alert("悬赏金额不能为空！");
			return 0;
		}
		if(!Pub_mission.content){
			alert("项目描述不能为空！");
			return 0;
		}
		return 1;
	}
}