<?php
require 'conexao/conexao.php';

if(isset($_SESSION['idusuario']) && !empty($_SESSION['idusuario'])){

    require_once 'Usuario.class.php';
    $u = new Usuario();
    $listLogged = $u-> logged($_SESSION['idusuario']);

    $listLogged['nome'];
    $nomeUser = $listLogged['nome'];

    $autocomplete = $u-> auto($_SESSION['idusuario']);
    $autocomplete['nome'];
    $auto = $autocomplete['nome'];
    $autoc = $u-> auto($_SESSION['idusuario']);
    $autoc['sobrenome'];
    $aut = $autoc['sobrenome'];

}else{
    header("Location: login.php");
}

?>