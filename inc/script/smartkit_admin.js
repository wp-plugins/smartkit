/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


jQuery(document).ready(function($) {
    
//    $('.smartkit-tile').each( function() {
//        
//        alert( $(this).index() );
//        
//        if( $(this).index() % 3 == 0 ) {
////            alert( 1 );
//            $(this).addClass('smartkit-delay');
//        }
//        
//    });


    $('.smartkit-toggle-mode').click( function(){
        
        var $this = $(this);
        var item = '#' + $(this).attr('data-item');
        
        if( $(this).hasClass('active') ){
            $(item).val(0);
        }else{
            $(item).val(1);
        }
        
        $(this).toggleClass('active');
        
    });    
});
