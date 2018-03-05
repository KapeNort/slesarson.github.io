$(window).scroll(function(){

	var st = $(this).scrollTop();

	$(".text").css({
		"transform" : "translate(0%, " + st/2 + "%"
	});
});


$(window).scroll(function(){

	var st = $(this).scrollTop();

	$(".text2").css({
		"transform" : "translate(0%, -" + st/3 + "%"
	});
});