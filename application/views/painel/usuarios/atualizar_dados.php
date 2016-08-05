<?php echo form_open('dashboard/users?acao=update');?>
<div class="row">
    <div class="col-md-12">
  
        <div class="form-group">
            <?php
                echo form_label('Nome');
                echo form_input('nome', set_value('nome', $get_dados_user['nome_usuario']), 'class="form-control"');
                echo form_error('nome');
            ?>
        </div>
        <div class="form-group">
            <?php
                echo form_label('Login');
                echo form_input('login', set_value('login', $get_dados_user['login_usuario']), 'class="form-control"');
                echo form_error('login');
            ?>
        </div>
        <div class="form-group">
            <?php
                echo form_label('Email');
                echo form_input('email', set_value('email', $get_dados_user['email_usuario']), 'class="form-control"');
                echo form_error('email');
            ?>
        </div>
        
    </div>    
       
    <div class="col-md-6">
        <fieldset>
            <legend class="text-info">Nível</legend>
       
        <?php
        $niveis = array(
            "1"=>"Administraçao",
            "2"=>"Leitor",
            "3"=>"Redator"
        );
            echo form_dropdown('nivel', $niveis, set_value('nivel', $get_dados_user['nivel']),'class="form-control"');
            echo form_error('Nível');
                      
        ?>
             </fieldset>
    </div>
    <div class="col-md-6">
         <fieldset>
            <legend class="text-info">Status</legend>
        <?php
           $status = array(
               "0"=>"Inativo",
               "1"=>"Ativo"
           );
           echo form_dropdown('status', $status, set_value('status', $get_dados_user['status_usuario']),'class="form-control"');
        ?>
         </fieldset>
    </div>
    <div class="col-md-12">
        <?php 
        echo form_hidden('id', $get_dados_user['id_usuario']);
        echo form_hidden('key_usuario', $get_dados_user['key_usuario']);
        echo form_submit('insert', 'Alterar', 'class="btn btn-warning pull-right"');
        ?>
    </div>
</div>
<?php echo form_close();?> 
