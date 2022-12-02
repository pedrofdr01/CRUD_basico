<!-- funções das telas de cadastros dos clientes -->

<?php

require_once('../config.php');
require_once(DBAPI); // inclui o arquivo de banco de dados

$users = null; // variável para armazenar os dados dos usuários
$user = null;  // variável para armazenar os dados do usuário

/**
 *  Listar todos os usuários
 */

function index()
{
    global $users;
    $users = find_all('users');
}

/**
 *  Cadastro de usuários
 */

function add()
{
    if (!empty($_POST['user'])) {

        $user = $_POST['user'];

        save('users', $user);
        header('location: index.php');
    }
}

/**
 *  Atualizacao/Edição de usuário
 */

function edit()
{

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        if (isset($_POST['user'])) {
            $user = $_POST['user'];
            update('users', $id, $user);
            header('location: index.php');
        } else {
            global $user;
            $user = find('users', $id);
        }
    } else {
        header('location: index.php');
    }
}

/**
 *  Visualização de um usuario
 */

function view($id = null) //faz a busca na tabela clientes pelo ID
{
    global $user;
    $user = find('users', $id); //resultado é guardado na variável, que será usada na view
}

/**
 *  Exclusão de um usuario
 */

function delete($id = null)
{
    global $user;
    $user = remove('users', $id);
    header('location: index.php');
}
