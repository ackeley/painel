<div class="row">
    <div class="col-md-12">
        <?php echo anchor('dashboard/users?acao=cadastrar', 'Adicionar', 'class="btn btn-info"' );?>
    </div>
</div>
<br>
<div class="row">
    <div class="col-md-12">
        <?php echo get_notification(); ?>
        <table class="table table-striped">
            <tr>
                <td>
                    Nome
                </td>
                <td>Email</td>
                <td>Ativo</td>
                <td>Administrador</td>
                <td>Ações</td>
            </tr>
            <tr>
                <td>
                    Nome
                </td>
                <td>Email</td>
                <td>Ativo</td>
                <td>Administrador</td>
                <td>Ações</td>
            </tr>
        </table>
    </div>
</div>