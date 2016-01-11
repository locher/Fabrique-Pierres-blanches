jQuery(document).ready(function(){
    $grid = jQuery('.wrapper-folio');
    
    $grid.isotope({
      itemSelector: '.single-folio',
      percentPosition: true,
      masonry: {
        // use outer width of grid-sizer for columnWidth
        columnWidth: '.grid-sizer',
          gutter: 20
      }
    })
    
    jQuery(".filter-folio a").removeAttr('href');

	// bind filter button click
	jQuery('.filter-folio').on( 'click', 'li', function() {
		var filterValue = jQuery( this ).attr('data-cat');
	    $grid.isotope({
	    	filter: '.'+filterValue
	    });
	    jQuery('.filter-folio li').removeClass('current-menu');
	    jQuery(this).toggleClass('current-menu');
	 });

	// Clic bouton tout
	jQuery('.filter-folio').on( 'click', '.bt-all', function() {
	    $grid.isotope({
	    	filter: '*'
	    });
	 });

});