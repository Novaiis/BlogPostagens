<?php

require_once 'Usuario.class.php';

$listar = new Usuario();
$dados = $listar->todas_postagens();

if($dados) {
    $array_usuarios = $dados;
} else {
    $array_usuarios = [];
}

