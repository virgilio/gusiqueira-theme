var widget = SC.Widget("gusiqueira-sc");
widget.bind(SC.Widget.Events.READY, function(){
        widget.bind(SC.Widget.Events.PLAY, function(){
            widget.getCurrentSound(function(currentSound) {
                console.log(lyrics.ajaxurl);
                console.log(currentSound.title + ' began to play');
                console.log("Vamo dar load nessa parada?");
                console.log("Essa parada tem ID: " + currentSound.id);
                // Aqui vem o Ajax pra dar load no Post =D!
                
                jQuery(document).ready(function($) {
                    var data = 
                    {
                        action: 'lyrics_post',
                        music_id: currentSound.id
                    };
                    // We can also pass the url value separately from ajaxurl for front end AJAX implementations
                    jQuery.post(lyrics.ajaxurl, data, function(response) {
                        jQuery("#current_lyric").html(response);
                    });
                });
            });
        });

        widget.bind(SC.Widget.Events.FINISH, function(){
            jQuery("#current_lyric").html("<p>Fim da playlist! Selecione uma música</p>");
        });
});
