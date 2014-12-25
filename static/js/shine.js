var Shine = {
	init:function(){
    $('.bink').each(function(){
		var color1 = "#fe7519";
		var color2 = "#7FFF00";
		var color3 = "#FFD700";
		if(color1 && color2){
			var index = 0, colors = [color1, color2,color3], me = $(this);

			setInterval(function(){
				me.css({color:colors[index++]});
				index = index > 2 ? 0 : index;
			}, 200);
			
		}
	});
}

}