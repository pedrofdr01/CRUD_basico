<?php

require_once ('functions.php');
index(); //backend da página

include('modal.php');
include(HEADER_TEMPLATE); // inclui o arquivo header.php

?>

<style>
    body {
        margin-top: -50px;
    }

</style>

<header>
    <div style="margin-top: 15px;" class="row">
        <div class="col-sm-6">
            <h2>Usuários</h2>
        </div>
        <div class="col-sm-6 text-right h2">
            <a style="background-color: green; border-color: green" class="btn btn-primary" href="add.php"><i class="fa fa-plus"></i> Novo Usuário</a>
            <a class="btn btn-default" href="index.php"><i class="fa fa-refresh"></i> Atualizar</a>
        </div>
    </div>
</header>

<!-- mensagens de notificações -->
<?php if (!empty($_SESSION['message'])) : ?>
    <div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <?php echo $_SESSION['message']; ?>
    </div>
    <?php //clear_messages(); ?>
<?php endif; ?>

<hr>

<table border="2" style="background-color: darkgrey; border-color: grey; text-align: center; color: black;">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Data de Nascimento</th>
            <th scope="col">CPF</th>
            <th scope="col">Telefone</th>
            <th scope="col">E-mail</th>
            <th scope="col">CEP</th>
            <th scope="col">Endereço</th>
            <th scope="col">Cidade</th>
            <th scope="col">Bairro</th>
            <th scope="col">Opções</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($users) : ?>
        <?php foreach ($users as $user) : ?>
            <tr>
                <td><?php echo $user['id']; ?></td>
                <td><?php echo $user['nome']; ?></td>
                <td><?php echo $user['data_nascimento']; ?></td>
                <td><?php echo $user['cpf']; ?></td>
                <td><?php echo $user['telefone']; ?></td>
                <td><?php echo $user['email']; ?></td>
                <td><?php echo $user['cep']; ?></td>
                <td><?php echo $user['endereco']; ?></td>
                <td><?php echo $user['cidade']; ?></td>
                <td><?php echo $user['bairro']; ?></td>
                <td class="actions text-right">
                    <a href="view.php?id=<?php echo $user['id']; ?>" class="btn btn-sm btn-success">Visualizar</a>
                    <a href="edit.php?id=<?php echo $user['id']; ?>" class="btn btn-sm btn-secondary">Editar</a>
                    <a href="delete.php?id=<?php echo $user['id']; ?>" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal" data-customer="<?php echo $user['id']; ?>">
                        <i class="fa fa-trash"></i>Excluir
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
        <?php else : ?>
            <tr>
                <td colspan="6">Nenhum registro encontrado.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

<?php include(FOOTER_TEMPLATE); ?>