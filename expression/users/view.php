<?php

require_once('functions.php');
view($_GET['id']);

include(HEADER_TEMPLATE);

?>

<style>
    body {
        margin-top: -50px;
    }
</style>

<div style="margin-top: 15px;">
    <h2>Usuário <?php echo $user['id']; ?></h2>
    <hr>

    <?php if (!empty($_SESSION['message'])) : ?>
        <div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
    <?php endif; ?>

    <dl class="dl-horizontal">
        <dt>Nome:</dt>
        <dd><?php echo $user['nome']; ?></dd>

        <dt>CPF:</dt>
        <dd><?php echo $user['cpf']; ?></dd>

        <dt>Data de Nascimento:</dt>
        <dd><?php echo $user['data_nascimento']; ?></dd>

    </dl>

    <dl class="dl-horizontal">
        <dt>CEP:</dt>
        <dd><?php echo $user['cep']; ?></dd>

        <dt>Endereço:</dt>
        <dd><?php echo $user['endereco']; ?></dd>

        <dt>Bairro:</dt>
        <dd><?php echo $user['bairro']; ?></dd>

        <dt>Cidade:</dt>
        <dd><?php echo $user['cidade']; ?></dd>

        <dt>Estado:</dt>
        <dd><?php echo $user['estado']; ?></dd>
    </dl>

    <dl class="dl-horizontal">
        <dt>Telefone:</dt>
        <dd><?php echo $user['telefone']; ?></dd>

        <dt>E-mail:</dt>
        <dd><?php echo $user['email']; ?></dd>
    </dl>

    <div id="actions" class="row">
        <div class="col-md-12">
            <a href="edit.php?id=<?php echo $user['id']; ?>" class="btn btn-primary">Editar</a>
            <a href="index.php" class="btn btn-default">Voltar</a>
        </div>
    </div>
</div>

<?php include(FOOTER_TEMPLATE); ?>