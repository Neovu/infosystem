 

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

        jQuery('#central_admin').css("height", jQuery('iframe').contents().height());
        console.log(jQuery("body").height())
        console.log(jQuery('iframe').contents().height())

    }

</script> 
<div id="central_admin" >
    <iframe onload="loaded()" class="central_admin" src="http://central.maisinternet.net.br/central/" /> 
</div>
 