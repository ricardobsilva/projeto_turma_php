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
    
    public function salvar(){
        $sql = "INSERT INTO especialidades(nome) VALUES(:nome)";
        $query = Conexao::prepare($sql);
        $query->bindValue(":nome", $this->getNome());
        $query->execute();
    }
   
}
 