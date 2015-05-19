 

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

<script>


    function loaded( ) {

        jQuery('#chat_admin').css("height", jQuery('iframe').contents().height());
        console.log(jQuery("body").height())
        console.log(jQuery('iframe').contents().height())

    }

</script> 
<div id="chat_admin" >
    <iframe onload="loaded()" class="chat_admin" src="/chat/index.php/site_admin/" /> 
</div>
