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