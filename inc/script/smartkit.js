/**
 * 
 * @author Smartcat Jan 21, 2015
 */
jQuery( document ).ready(function($){

    // Lightbox
    $('.smartkit-lightbox-trigger').click( function () {
        
        var $clicker = $(this);
        var image = $(this).attr('src');
                
        $('.smartkit-lightbox-inner').html( '<img src="' + image + '" />' );
        
        $('#smartkit-lightbox-overlay').fadeIn(400, function (){
            $('#smartkit-lightbox').removeClass('lightbox-closed').addClass('lightbox-open').css({ display : 'block' });
        });

    });
    
    $('body').on('click', '.smartkit-close-lightbox', function (){
        
        $('#smartkit-lightbox').removeClass('lightbox-open').addClass('lightbox-closed');
        $('#smartkit-lightbox-overlay').delay(500).fadeOut(400, function(){
            $('#smartkit-lightbox-overlay,#smartkit-lightbox').hide();
        });
        
    });
    //end lightbox

});
