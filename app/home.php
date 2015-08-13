<?php 
$user = & JFactory::getUser();
if ($user->guest) {
    $idadmin = 0;
    $idname = "convidado";
} else {
    $idadmin = $user->id;
    $idname = $user->username;
}
?>
  
<script type="text/javascript">
    var idadmin = "<? echo $idadmin; ?>";
    var idname = "<? echo $idname; ?>";
    
    (function($) {
 
        $(document).ready(function($) {
            $("#rt-top-surround, .gf-menu-toggle").hide();
            $('body').append("<input type=\"hidden\" value=\"<? echo $idadmin; ?>\" id=\"adminID\" />");
            $('body').css("overflow", "hidden")
            var url = "<div id=\"landing\"><iframe id=\"home-frame\" src=\"app/landing/index.html\"></iframe><div>";
            $('#rt-mainbody-surround').html(url);
            $('#landing, #home-frame').css("height", window.innerHeight);
            
            $('#home-frame').bind('load', function() {
                $('#rt-mainbody-surround').show();
                $('#home-frame').show();
                 $("#rt-top-surround, .gf-menu-toggle").hide();
            });
        });
    })(jQuery);


</script> 
 
<script>

    jQuery('#contact-button').click(function (e) {
        e.preventDefault();
        var submitData = jQuery('#contact-form').serialize();
        var $name = jQuery('#contact-form').find('input[name="name"]');
        var $email = jQuery('#contact-form').find('input[name="email"]');
        var $subject = jQuery('#contact-form').find('textarea[name="subject"]');
        var $message = jQuery('#contact-form').find('textarea[name="message"]');
        var $submit = jQuery('#contact-form').find('input[name="submit"]');
        var $dataStatus = jQuery('#contact-form').find('.data-status');

        $name.attr('disabled', 'disabled');
        $email.attr('disabled', 'disabled');
        $subject.attr('disabled', 'disabled');
        $message.attr('disabled', 'disabled');
        $submit.attr('disabled', 'disabled');

        $dataStatus.show().html('<div class="alert alert-info"><strong>Enviando...</strong></div>');
        console.log("clie de mail" + submitData);

        jQuery.ajax({
            type: 'POST',
            url: '/app/send_mail.php',
            data: submitData + '&action=add',
            dataType: 'text',
            success: function (msg) {
                if (parseInt(msg, 0) !== 0) {
                    var msg_split = msg.split('|');
                    if (msg_split[0] === 'success') {
                        $name.val('').removeAttr('disabled');
                        $email.val('').removeAttr('disabled');
                        $subject.val('').removeAttr('disabled');
                        $message.val('').removeAttr('disabled');
                        $submit.removeAttr('disabled');
                        $dataStatus.html(msg_split[1]).fadeIn();
                    } else {
                        $name.removeAttr('disabled');
                        $email.removeAttr('disabled');
                        $subject.removeAttr('disabled');
                        $message.removeAttr('disabled');
                        $submit.removeAttr('disabled');
                        $dataStatus.html(msg_split[1]).fadeIn();
                    }
                }
            }
        });

    });

</script>