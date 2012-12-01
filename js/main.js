jQuery(function()
{
	$(window).on("resize", function()
	{
		$(".panel-main").height($(window).height());
	})
	.trigger("resize");

	$("#debug-reflow").on("click", function()
	{
		$("body").toggleClass("content-left");
		return false;
	});
});
