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
			"type": "GET",
			"url": "admin/index/",
			"data": "tid="+Admin.tid,
			"dataType": "json",
			"success": function(data){
			}
		});
	}
}