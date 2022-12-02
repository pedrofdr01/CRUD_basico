<?php

require_once('config.php');
require_once DBAPI; // inclui o arquivo de banco de dados
include(HEADER_TEMPLATE);

$database = open_database(); // abre o banco de dados 
?>

<style>
    .btn-info {
        color: #fff;
        background-color: green;
        border-color: green;
        border-radius: 8px;
    }

    .user {
        margin: 0 auto;
    }
    
    body {
        margin-top: -50px;
    }
</style>

<h1 style="margin-top: 15px;">Bem-Vindos!</h1>
<hr />

<?php if ($database) : ?>

    <div class="row">
        
        <div class="col-xs-6 col-sm-3 col-md-2">
            <a type="button" href="users/add.php" class=" btn-info">
                <div class="row" style="margin: 3px; text-align:center;">
                    <div class="col-xs-12 botao">
                        <img id="add" src="/img/plus-add.png" alt="">
                    </div>
                    <div id="novo" class="col-xs-12 text-center">
                        <p>Novo Contato</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-xs-6 col-sm-3 col-md-2">
            <a type="button" href="users/index.php" class="user btn-info">
                <div class="row" style="margin: 3px; text-align:center;">
                    <div class="col-xs-12 text-center">
                        <img id="user" src="/img/users-icon.png">
                    </div>
                    <div id="usuarios" class="col-xs-12 text-center">
                        <p>Usuários</p>
                    </div>
                </div>
            </a>
        </div>
    </div>

<?php else : ?>

    <div class="alert alert-danger" role="alert">
        <p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>
    </div>

<?php endif; ?>

<?php include(FOOTER_TEMPLATE); ?>