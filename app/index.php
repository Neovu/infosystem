<div class="row-fluid">
    <div class="container">
        <div class="span6">
            <h1>Call to Action</h1>
            <p></p>
        </div>
        <div class="span6">
            <img src="#"/>
        </div>
    </div>
</div>
<div class="row-fluid">
    <div class="container">
        <h2>No que acreditamos</h2>
        <p>Lorem ipsum, blsit amet</p>
        <div class="span4">
            <img src="#"/>
            <h2>Solucoes Completas</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet.</p>
        </div>
        <div class="span4">
            <img src="#"/>
            <h2>Solucoes Completas</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet.</p>
        </div>
        <div class="span4">
            <img src="#"/>
            <h2>Solucoes Completas</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet.</p>
        </div>
    </div>
</div>
<div class="row-fluid">
    <div class="container">
        <h2>Nossos principais serviços</h2>
        <p>Lorem ipsum, blsit amet</p>
        <div class="span4">
            <img src="#"/>
            <h2>Internet</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet.</p>
            <p>
                <a class="btn btn-default btn-lg" href="#"></a>
            </p>
        </div>
        <div class="span4">
            <img src="#"/>
            <h2>Solucoes Completas</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet.</p>
            <p>
                <a class="btn btn-default btn-lg" href="#"></a>
            </p>
        </div>
        <div class="span4">
            <img src="#"/>
            <h2>Solucoes Completas</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet.</p>
            <p>
                <a class="btn btn-default btn-lg" href="#"></a>
            </p>
        </div>
        <div class="span4">
            <img src="#"/>
            <h2>Internet</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet.</p>
            <p>
                <a class="btn btn-default btn-lg" href="#"></a>
            </p>
        </div>
        <div class="span4">
            <img src="#"/>
            <h2>Solucoes Completas</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet.</p>
            <p>
                <a class="btn btn-default btn-lg" href="#"></a>
            </p>
        </div>
        <div class="span4">
            <img src="#"/>
            <h2>Solucoes Completas</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet.</p>
            <p>
                <a class="btn btn-default btn-lg" href="#"></a>
            </p>
        </div>
    </div>
</div>
<div class="row-fluid">
    <div class="container">
        <h2>Veja quem está comentando</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet.</p>
        <div>
            INSERIR CAROUSEL
        </div>
    </div>
</div>
<div class="row-fluid">
    <div class="span2">
        <img src=""/>
    </div>
    <div class="span2">
        <img src=""/>
    </div>
    <div class="span2">
        <img src=""/>
    </div>
    <div class="span2">
        <img src=""/>
    </div>
    <div class="span2">
        <img src=""/>
    </div>
    <div class="span2">
        <img src=""/>
    </div>
</div>
<div class="row-fluid">
    <div class="container">
        <h2>Saiba mais sobre a gente</h2>
        <p>Lorem ipsum, blsit amet</p>
        <div class="span4">
            <img src="#"/>
            <h2>Facebook</h2>
            
        </div>
        <div class=span4">
            <img src="#"/>
            <h2>Twitter</h2>
           
        </div>
        <div class="span4">
            <img src="#"/>
            <h2>Google +</h2>
           
        </div>
    </div>
</div>


<div class="center">

    <h2 class="vert-offset-bottom-10">Algo <span class="destaque">incrível</span> está para acontecer</h2> 
</div>
<div class="center">
    <form action="" class="default-form margin-bottom-65" id="contact-form" method="post">
        <div class="form-group">
            <!--      <label for="name">Name</label>-->
            <input type="text" class="form-control span5 input-cool" name="name" maxlength="255" id="name" placeholder="seu nome">
        </div>
        <div class="form-group">
            <!--      <label for="email">Email <span class="require">*</span></label>-->
            <input type="text" class="form-control span5 input-cool" name="email" maxlength="255" id="email" placeholder="seu email">
        </div>
        <div class="form-group">
            <!--      <label for="message">Message</label>-->
            <input type="text" class="form-control span5 input-cool"   name="subject" id="subject" maxlength="255" placeholder="assunto">
        </div>
        <div class="form-group">
            <!--      <label for="message">Message</label>-->
            <textarea class="form-control span5 input-cool" rows="8" name="message" id="message" placeholder="sua mensagem"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-orange-cool btn-warning gantry-width-50" id="contact-button">Enviar</button> 
        </div>
        <div class="data-status"> </div> 

    </form>

</div>

<p></p>


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