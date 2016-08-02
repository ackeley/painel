<?php echo form_open('dashboard/users?acao=insert');?>
<div class="row">
    <div class="col-md-12">
  
        <div class="form-group">
            <?php
                echo form_label('Nome');
                echo form_input('nome', set_value('nome'), 'class="form-control"');
                echo form_error('nome');
            ?>
        </div>
        <div class="form-group">
            <?php
                echo form_label('Login');
                echo form_input('login', set_value('login'), 'class="form-control"');
                echo form_error('login');
            ?>
        </div>
        <div class="form-group">
            <?php
                echo form_label('Email');
                echo form_input('email', set_value('email'), 'class="form-control"');
                echo form_error('email');
            ?>
        </div>
        
    </div>  
        <div class="col-md-6">
            <div class="form-group">
                <?php
                    echo form_label('Senha');
                    echo form_password('senha', set_value('senha'), 'class="form-control"');
                    echo form_error('senha');
                    ?>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <?php
                    echo form_label('Repita a Senha');
                    echo form_password('re-senha', set_value('re-senha'), 'class="form-control"');
                    echo form_error('re-senha');
                    ?>
            </div>
        </div>   
    <div class="col-md-12">
        <?php
            echo form_checkbox('is_admin','1', set_checkbox('is_admin')). 'Administrador';
           
        ?>
    </div>
    <div class="col-md-12">
        <?php 
        echo form_submit('insert', 'Adicionar', 'class="btn btn-success pull-right"');
        ?>
    </div>
</div>
<?php echo form_close();?> 
