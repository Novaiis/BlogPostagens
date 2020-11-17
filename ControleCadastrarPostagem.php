<?php
session_start();

require_once 'ClassPostagem.php';
require_once 'Usuario.class.php';

$titulo_postagem = @$_POST['titulo_postagem'];
$autor_postagem = @$_POST['autor_postagem'];
$conteudo_postagem = @$_POST['conteudo_postagem'];

if(!empty($titulo_postagem) and !empty($autor_postagem) and !empty($conteudo_postagem)) {
    
    $cadastrar_postagem = new ClassPostagem();
    $cadastrar_postagem->setTituloPostagem($titulo_postagem);
    $cadastrar_postagem->setAutorPostagem($autor_postagem);
    $cadastrar_postagem->setConteudoPostagem($conteudo_postagem);

    $classPostagemDAO = new Usuario();

    $cadastrar_postagem = $classPostagemDAO->cadastrar_postagem($cadastrar_postagem);

    $_SESSION ['postagem_realizada'] = true;

    header('Location: postagens2.php');
}  