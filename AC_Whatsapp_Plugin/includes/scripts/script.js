jQuery(function(){

    // FORMULARIO DE CONFIGURAÇÕES
    jQuery('#ac-config-card-1').on('submit', function(e){
        e.preventDefault();

        var form = {
            action: 'ac_save_config',
            url_1: jQuery('#url_1').val(),
            url_2: jQuery('#url_2').val(),
            txt_1: jQuery('#area_code').val(),
            txt_2: jQuery('#number').val(),
            txt_3: jQuery('#color_01').val(),
            txt_4: jQuery('#color_02').val(),
            txt_5: jQuery('#active').val(),
            txt_6: jQuery('#language').val()
        };

        console.log(form);
        
        jQuery.ajax({
            type:'POST',
            url:ac_zap_objeto.ac_post_url,
            data:form,
            dataType:'json',
            success:function(json){
                if (json == 2) {
                    jQuery('#ac-msg-admin-01').show();
                    window.location.href = "?page=ac_whatsapp_poup&msg=2"
                } else {
                    jQuery('#ac-msg-admin-02').show();
                    window.location.href = "?page=ac_whatsapp_poup&msg=2"
                }
            }
        });
    });
});