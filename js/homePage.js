$(function(){
	$('.carousel').carousel({
	  interval:2000,
	});

	$(".ani").hover(function(){
		$(this).animate({
			"margin-left":"-=800px"
		},1000);
	},function(){
		$(this).animate({
			"margin-left":"0px"
		},500);
	});

	$(".nList>li>a").hover(function(){
		$(this).css("background","red").css("color","#fff");
	},function(){
		$(this).css("background","#fff").css("color","#aaa");
	});

	$(window).resize(function(event) {
		if($(window).width()<=700){
			$("#resizeHidden").css("display","none");
			$(".jiequhuodong").css("margin-right","15px");
		}else{
			$("#resizeHidden").css("display","block");
			$(".jiequhuodong").css("margin-right","");
		}
	});

});
