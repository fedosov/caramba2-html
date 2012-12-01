jQuery(function()
{
	$(window).on("resize", function()
	{
		$(".panel-left").height($(window).height());
	})
	.trigger("resize");
});
