jQuery(function( $ ){
	$('.fundo').wpColorPicker();
	/*------------------------------------------------------------------------*
 * Image settings
/*------------------------------------------------------------------------*/
function upload_image_callback( obj ){
    window.send_to_editor = function(html) {            
        // The imagem URL
        imgurl = $('img', html).attr('src');
        
        // Change value for the target field
        $(obj).val(imgurl);
        
        // Remove
        tb_remove();
    }
}

/*------------------------------------------------------------------------*
 * Upload Image fields
/*------------------------------------------------------------------------*/
$('.imagem').focus(function() {
    // Remove the actual 
    $(this).val('');
    
    tb_show('Book cover', 'media-upload.php?referer=wptuts-settings&type=image&TB_iframe=true&post_id=0', false);
    
    // Callback
    upload_image_callback(this);
    
    return false;
});
});

