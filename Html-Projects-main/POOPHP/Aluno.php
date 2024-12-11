<?php
 class Aluno{
    private $nome;
    private $idade;

    private $tipo;


    function set_nome($nome){
        $this->nome = $nome;
    }

    function get_nome(){
        return $this->nome;
    }
    function set_idade($idade){
        $this->idade = $idade;
    }

    function get_idade(){
        return $this->idade;
    }

    function __construct($nome, $idade, $tipo){

        $this->nome = $nome;
        $this->idade = $idade;
    }

 }


?>