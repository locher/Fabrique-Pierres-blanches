jQuery(document).ready(function(){
    
    function display_tab(){
        jQuery('.tab-content').find('.tab').hide();
        id_activ = jQuery('.tab-menu').find('li.active').attr('data-id');      
        jQuery('.tab-content').find('.'+id_activ).show();
    }

    display_tab();

    //

    jQuery('.tab-menu').find('li').click(function(event){
        event.stopPropagation();
       jQuery('.tab-menu').find('li').removeClass('active');
       jQuery(this).toggleClass('active');
        display_tab();
    });
    
    // Vérifier l'url    
    
    var $hashname = window.location.hash;
    
    console.log($hashname);

    
    
    if($hashname == '#celine'){ //tab63
        jQuery('.tab-content').find('.tab61').hide();   
        jQuery('.tab-content').find('.tab63').show();
        jQuery('.tab-menu').find('li').removeClass('active');
        jQuery('.tab-menu li[data-id="tab63"]').addClass('active');        
    }
    
    
    if($hashname == '#mie'){ //tab63
        jQuery('.tab-content').find('.tab63').hide();   
        jQuery('.tab-content').find('.tab61').show();
        jQuery('.tab-menu').find('li').removeClass('active');
        jQuery('.tab-menu li[data-id="tab61"]').addClass('active');
    }
    
    
});