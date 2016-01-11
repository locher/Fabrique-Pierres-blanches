(function ($, root, undefined) {
	
	$(function () {
		
		$('.list-article').find('h2 a').hover(function(){
            $(this).parent().parent().parent().toggleClass('hover');
        });
        $('.list-article').find('.bt').hover(function(){
            $(this).parent().parent().toggleClass('hover');
        });
		
	});
	
})(jQuery, this);