<!-- marcação de cadastros -->

<?php
require_once('functions.php');
add();

include(HEADER_TEMPLATE);
?>

<style>
    body {
        margin-top: -50px;
    }
</style>

<div style="margin-top: 15px;">
    <h2>Novo Usuário</h2>

    <form action="add.php" method="post">
        <!-- area de campos do form -->
        <hr />
        <div class="row">
            <div class="form-group col-md-7">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" name="user['nome']">
            </div>

            <div class="form-group col-md-3">
                <label for="cpf">CPF</label>
                <input type="text" class="form-control" name="user['cpf']">
            </div>

            <div class="form-group col-md-2">
                <label for="data_nascimento">Data de Nascimento</label>
                <input type="text" class="form-control" name="user['data_nascimento']">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-5">
                <label for="cep">CEP</label>
                <input type="text" class="form-control" name="user['cep']">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-5">
                <label for="endereco">Endereço</label>
                <input type="text" class="form-control" name="user['endereco']">
            </div>

            <div class="form-group col-md-3">
                <label for="bairro">Bairro</label>
                <input type="text" class="form-control" name="user['bairro']">
            </div>

            <div class="form-group col-md-2">
                <label for="cidade">Cidade</label>
                <input type="text" class="form-control" name="user['cidade']">
            </div>

            <div class="form-group col-md-2">
                <label for="estado">Estado</label>
                <input type="text" class="form-control" name="user['estado']">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-3">
                <label for="telefone">Telefone</label>
                <input type="text" class="form-control" name="user['telefone']">
            </div>

            <div class="form-group col-md-3">
                <label for="email">E-mail</label>
                <input type="text" class="form-control" name="user['email']">
            </div>
        </div>

        <div id="actions" class="row">
            <div class="col-md-12">
                <button style="background-color: green; border-color:green" type="submit" class="btn btn-primary">Salvar</button>
                <a style="color: white;" href="index.php" class="btn btn-secondary">Cancelar</a>
            </div>
        </div>
    </form>
</div>

<?php include(FOOTER_TEMPLATE); ?>