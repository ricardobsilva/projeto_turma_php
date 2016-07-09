<?php

include_once '../db/Conexao.php';

class Especialidade {
    private $id;
    private $nome;
    
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    public function listarTodasEspecialidades(){
        $sql = 'SELECT * FROM especialidades ';
        $query = Conexao::prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }
    
}
