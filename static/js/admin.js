var Admin = {
	init: function(){
		Admin.tid = $("#select-item").val();
		Admin.submit();
		
		$("#select-item").change(function(){
			Admin.tid = $("#select-item").val();
			Admin.submit();
		});
	},
	submit: function(){
		$.ajax({
			"type": "POST",
			"url": "admin/get_result",
			"data": "tid="+Admin.tid,
			"dataType": "json",
			"success": function(data){
				if(data.result){
					alert(data.result);
				}
				else{
					alert("发布失败！");
				}
			}
		});
	}
	
	
}