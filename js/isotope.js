jQuery(document).ready(function(){
    jQuery('.wrapper-folio').isotope({
      itemSelector: '.single-folio',
      percentPosition: true,
      masonry: {
        // use outer width of grid-sizer for columnWidth
        columnWidth: '.grid-sizer',
          gutter: 20
      }
    })
});