<?php

class ClassPostagem {

    private $id_postagem;
    private $titulo_postagem;
    private $autor_postagem;
    private $conteudo_postagem;

    function getIdPostagem(){
        return $this->id_postagem;
    }
    function setIdPostagem($id_postagem){
        $this->id_postagem = $id_postagem;
    }

    function getTituloPostagem(){
        return $this->titulo_postagem;
    }
    function setTituloPostagem($titulo_postagem){
        $this->titulo_postagem = $titulo_postagem;
    }

    function getAutorPostagem(){
        return $this->autor_postagem;
    }
    function setAutorPostagem($autor_postagem){
        $this->autor_postagem = $autor_postagem;
    }

    function getConteudoPostagem(){
        return $this->conteudo_postagem;
    }
    function setConteudoPostagem($conteudo_postagem){
        $this->conteudo_postagem = $conteudo_postagem;
    }


}

?>