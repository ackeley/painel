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
                <td>Ativo / Inativo</td>
                <td>Nivel</td>
                <td>Ações</td>
            </tr>
            {listar_users}
            <tr>
                <td>
                    {nome}
                </td>
                <td>{email}</td>
                <td>{status}</td>
                <td>{nivel}</td>
                <td>{editar}{deletar}{desativar}{trocar_senha}{trnivel</td>
            </tr>
            {/listar_users}
        </table>
    </div>
</div>