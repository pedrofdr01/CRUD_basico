<!DOCTYPE html>
<html>
<!-- echo BASEURL -> armazena o endereço correto da aplicação no server -->

<style>
    body {
        padding-top: 50px;
        padding-bottom: 20px;
    }

    button {
        background-color: green;
    }
</style>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Expression - CRUD</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
</head>

<body>
    <nav style="background-color: green;" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <a id="nav-down" type="button" class="btn-default" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <img id="barras" src="/img/icons8-bars-24.png">
                </a>

            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li style="display: flex; text-align: center" class="dropdown">
                        <a style="color: white;" id="home" style="margin-right: 4px; padding-right: 8px; " href="<?php echo BASEURL ?>">
                            Home
                        </a>
                        <a style="color: white;" id="home" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            Usuários
                            <span class="caret"></span>
                        </a>
                        <ul style="text-align:center" class="dropdown-menu">
                            <li><a class="gerenciar-add" style="color: green;" href="/users/index.php">Gerenciar</a></li>
                            <li><a class="gerenciar-add" style="color: green;" href="/users/add.php">Adicionar</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container">