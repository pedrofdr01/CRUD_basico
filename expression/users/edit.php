<?php

require_once('functions.php');
edit();

include(HEADER_TEMPLATE);

?>

<style>
    body {
        margin-top: -50px;
    }
</style>

<div style="margin-top: 15px;">
    <h2>Atualizar Usuário</h2>

    <form action="edit.php?id=<?php echo $user['id']; ?>" method="post">
        <!-- area de campos do form -->
        <hr />
        <div class="row">
            <div class="form-group col-md-7">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" name="user['nome']" value="<?php echo $user['nome']; ?>">
            </div>

            <div class="form-group col-md-3">
                <label for="cpf">CPF</label>
                <input type="text" class="form-control" name="user['cpf']" value="<?php echo $user['cpf']; ?>">
            </div>

            <div class="form-group col-md-2">
                <label for="data_nascimento">Data de Nascimento</label>
                <input type="text" class="form-control" name="user['data_nascimento']" value="<?php echo $user['data_nascimento']; ?>">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-5">
                <label for="cep">CEP</label>
                <input type="text" class="form-control" name="user['cep']" value="<?php echo $user['cep']; ?>">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-5">
                <label for="endereco">Endereço</label>
                <input type="text" class="form-control" name="user['endereco']" value="<?php echo $user['endereco']; ?>">
            </div>

            <div class="form-group col-md-3">
                <label for="bairro">Bairro</label>
                <input type="text" class="form-control" name="user['bairro']" value="<?php echo $user['bairro']; ?>">
            </div>

            <div class="form-group col-md-2">
                <label for="cidade">Cidade</label>
                <input type="text" class="form-control" name="user['cidade']" value="<?php echo $user['cidade']; ?>">
            </div>

            <div class="form-group col-md-2">
                <label for="estado">Estado</label>
                <input type="text" class="form-control" name="user['estado']" value="<?php echo $user['estado']; ?>">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-3">
                <label for="telefone">Telefone</label>
                <input type="text" class="form-control" name="user['telefone']" value="<?php echo $user['telefone']; ?>">
            </div>

            <div class="form-group col-md-3">
                <label for="email">E-mail</label>
                <input type="text" class="form-control" name="user['email']" value="<?php echo $user['email']; ?>">
            </div>
        </div>

        <div id="actions" class="row">
            <div class="col-md-12">
                <button style="color: #fff;" type="submit" class="btn btn-default">Editar</button>
                <button style="color: #fff; background-color: grey" href="index.php" class="btn btn-default">Voltar</button>
            </div>
        </div>

    </form>
</div>

<?php include(FOOTER_TEMPLATE); ?>