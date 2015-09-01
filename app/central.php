 

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

        // jQuery('#central_admin').css("height", jQuery('iframe').contents().height());
        jQuery('#central_admin').css("height", "1200px");
        console.log(jQuery("body").height())
        console.log(jQuery('iframe').contents().height())



    }
    function loadlink(link) {

        var links = [
            'http://central.maisinternet.net.br/central/index.php?section=segundavia',
            'http://painel.maisinternet.net.br/index.php?section=historico',
            'http://painel.maisinternet.net.br/index.php?section=meusplanos',
            'http://central.maisinternet.net.br/central/templates/medidor/initialmeter.php'];

        jQuery("#central_iframe").attr('src', links[link]);

    }
</script>  


<div class="container central">
    <ul class="gf-menu gf-splitmenu">
        <li class="item"><a href="#" onclick="loadlink(0)"> 2 via boleto</a></li>
        <li class="item"><a href="#" onclick="loadlink(1)">extrato financeiro</a></li>
        <li class="item"><a href="#" onclick="loadlink(2)"> dados do meu plano</a></li> 
        <li class="item"><a href="#" onclick="loadlink(3)">medidor de velocidade</a></li>
    </ul> 
</div> 

<div id="central_admin"> 
    <iframe id="central_iframe" onload="loaded()" class="central_admin" src="http://central.maisinternet.net.br/central/" /> 
</div>
