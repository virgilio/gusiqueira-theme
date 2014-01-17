jQuery(document).ready(function(){

    jQuery("#current_lyric").on('change', function(){
        jQuery(this).mCustomScrollbar({
            scrollButtons:{
			    enable:true
    		},
		    theme:"dark-thick"
        });
    });
});
