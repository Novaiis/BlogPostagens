<?php

require_once 'conexao/conexao2.php';
class Usuario{

        public function login($email, $senha){
            global $pdo;

            $sql ="SELECT * FROM usuarios WHERE email= :email AND senha= :senha";
            $sql = $pdo->prepare($sql);
            $sql->bindValue("email",$email);
            $sql->bindValue("senha",MD5($senha));
            $sql->execute();

            if($sql->rowCount() > 0){
                $dado = $sql->fetch();

                $_SESSION['idusuario'] = $dado['iduser'];

                return true;

            }else{
                return false;
            }
        }

       public function logged($id){
           global $pdo;
           $array = array();
           $sql="SELECT nome FROM usuarios WHERE iduser=:iduser";
           $sql = $pdo->prepare($sql);
           $sql->bindValue("iduser", $id);
           $sql->execute();

           if($sql->rowCount() > 0){
               $array = $sql->fetch();
           }
           return $array;
       } 

       public function auto($id){
        global $pdo;
        $array = array();
        $sql="SELECT nome, sobrenome FROM usuarios WHERE iduser=:iduser";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("iduser", $id);
        $sql->execute();

        if($sql->rowCount() > 0){
            $array = $sql->fetch();
        }
        return $array;
    }

    // Cadastrar Postagem
    public function cadastrar_postagem(ClassPostagem $cadastrar_postagem) {
        try {
            $pdo = Conexao::getInstance(); // Instanciando o objeto a partir da classe conexão
            $sql = "INSERT INTO postagens (titulo_postagem, autor_postagem, conteudo_postagem) values (?,?,?)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(1, $cadastrar_postagem->getTituloPostagem());
            $stmt->bindValue(2, $cadastrar_postagem->getAutorPostagem());
            $stmt->bindValue(3, $cadastrar_postagem->getConteudoPostagem());
           
            $stmt->execute();
            return TRUE;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    // Listar todos os usuarios
    public function todas_postagens() {
        try {
            $pdo = Conexao::getInstance(); 
            $sql = "SELECT * FROM postagens order by id_postagem DESC";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (PDOException $ex) {
            return $ex->getMessage();
        }
    }

}