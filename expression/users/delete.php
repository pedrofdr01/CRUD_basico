<?php
require_once ('functions.php');

delete($_GET['id']);

if (!empty($_GET['id'])) {
    $id = $_GET['id'];
} else {
    die("ERRO: ID não definido.");
}
