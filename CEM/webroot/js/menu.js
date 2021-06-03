$("[data-control]").click(function(){
	var set = $(this).attr("data-control");
	$("#produtosMenu").removeClass("show-menu");
	$("#storecheckMenu").removeClass("show-menu");
	$(set).addClass("show-menu");
})
$("[data-menu-close]").click(function(){
	var closeLayer = $(this).parent().parent().attr("id");
	$("#"+closeLayer).removeClass("show-menu");
})
$("[data-menu-close-bg]").click(function(){
	$(this).removeClass("show-menu");
})