 
<form name = "meu_form"> 
    <h1>Entre em contato</h1> 
    <p class = "nome"> 
        <input type = "text" id = "nomeid" placeholder = "" required = "required" name = "nome" /> 
        <label for = "nome">Nome</label> 
    </p> 
    <p class = "fone">
        <input type = "text" id = "foneid" placeholder = "(xx)xx-xx-xx-xx" name = "fone" /> 
        <label for = "fone">Fone</label> 
    </p> 
    <p>
        <input type = "email" id = "emailid" placeholder = "" name = "email" /> 
        <label for = "email">Email</label> 
    </p> 
    <p> 
        <textarea placeholder = "Deixe sua opnião">
            
        </textarea> 
    </p> 
    <p class = "submit"> 
        <input type = "submit" onclick = "Enviar();" value = "Enviar" />
    </p> 
</form>
