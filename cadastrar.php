
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<?php 


if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha']) && isset($_POST['nome']) && !empty($_POST['nome']) && isset($_POST['sobrenome']) && !empty($_POST['sobrenome'])){
require 'conexao/conexao.php';

$nome=filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$sobrenome=filter_input(INPUT_POST, 'sobrenome', FILTER_SANITIZE_STRING);
$email=filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$senha=md5(filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING));

$insere="INSERT INTO usuarios(nome, sobrenome, email, senha) VALUES ('$nome','$sobrenome','$email','$senha')";
$result=mysqli_query($conn, $insere);

header('location: login.php');

}else{
    header('location: register.php');
}