jQuery(function()
{
	$(window).on("resize", function()
	{
		$(".panel-main").height($(window).height());
	})
	.trigger("resize");

	$(".page-right-inner .items a, .panel-main .pull").on("click", function()
	{
		$("body").toggleClass("content-left");
		return false;
	});

	$(".content .page-right .items").masonry(
	{
		itemSelector: 'li',
		isAnimated: true,
		columnWidth: 250.0,
		gutterWidth: 9.0
	});
});
