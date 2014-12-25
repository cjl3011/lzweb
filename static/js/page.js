var Page = {
	current_page: 0,
	init: function(){
		$("#pre-btn").bind("click", Page.pre_page);
		$("#next-btn").bind("click", Page.next_page);
		Page.next_page();
	},
	pre_page: function(){
		var current_page = Page.current_page - 1;
		if(current_page < 1){
			current_page = 1;
		}
		var offset = (current_page-1)*2;
		$.ajax({
			"type":"POST",
			"url": "mission_list/get_page",
			"data": "offset="+offset+"&num=2",
			"dataType": "json",
			"success": function(data){
				if(data.missions.length > 0){
					Page.current_page = parseInt(data.offset)/2 + 1;
					Page.fill_page(data);
				}
			}
		});
	},
	next_page: function(){
		var current_page = Page.current_page + 1;
		console.log(current_page);
		var offset = (current_page-1)*2;
		$.ajax({
			"type":"POST",
			"url": "mission_list/get_page",
			"data": "offset="+offset+"&num=2",
			"dataType": "json",
			"success": function(data){
				if(data.missions.length > 0){
					Page.current_page = parseInt(data.offset)/2 + 1;
					Page.fill_page(data);
				}
			}
		});
	},
	fill_page: function(data){
		$("#current").html(Page.current_page);
		$("#total").html(data.page);
		var mission_list = $("#mission-list");
		mission_list.html("");
		var mission = {};
		var mission_div = {};
		for(var i=0; i<data.missions.length; i++){
			mission = data.missions[i];
			mission_div = $("<div/>").attr({"class": "mission"});
			$("<div/>").html('<a class="mission-title" href="http://localhost/lzweb/index.php/mission_reply/index/'+mission.mid+'">'+mission.title+'</a><br/>发布者:'+mission.nickname)
					.attr({"class": "mission-left"}).appendTo(mission_div);
			$("<div/>").html('发布时间：'+ mission.pubtime+ '<br/>回复：' + mission.reply_count + '&nbsp;点赞：'+ mission.goodcount)
					.attr({"class": "mission-right"}).appendTo(mission_div);
			mission_div.appendTo(mission_list);
		}
	}
}