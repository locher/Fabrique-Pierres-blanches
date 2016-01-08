jQuery(document).ready(function(){
    
    function display_tab(){
        jQuery('.tab-content').find('.tab').hide();
        id_activ = jQuery('.tab-menu').find('li.active').attr('data-id');      
        jQuery('.tab-content').find('.'+id_activ).show();
    }

    display_tab();

    //

    jQuery('.tab-menu').find('li').click(function(){
       jQuery('.tab-menu').find('li').removeClass('active');
       jQuery(this).toggleClass('active');
        display_tab();
    });
    
});