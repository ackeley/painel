<html>
    <head>        
        <meta charset="UTF-8">
        <title>Login Painel</title>
          {css}
    </head>
    <body>
        <section class="row">
            <div class="medium-7 small-centered columns">
                <h3 class="subheader">Login</h3>
            </div>
        </section>
        <section class="row">
            <div class="medium-7 small-centered columns">
                <fieldset>
                    <legend>Identifique-se</legend>
                <?php 
                    echo form_open('login/logar');
                    mensagem('Usuário ou senha inválida', MGERROR);
                    echo form_label('Login', 'login');
                    echo form_input('email', set_value('login'), 'id="login"');
                    
                    echo form_label('Senha', 'senha');
                    echo form_password('senha', NULL, 'id="senha"');
                    
                    echo form_submit('Entrar', 'Login', 'class="button  tiny right radius"');
                    echo form_close();
                    ?>
                 </fieldset>
            </div>
        </section>
     
        
       
                 
    </body>
</html>
