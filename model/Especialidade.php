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

    public function buscar($id = null){
        $sql = 'SELECT * FROM especialidades WHERE id = :id ';
        $query = Conexao::prepare($sql);
        $query->bindValue(":id", $id);
        $query->execute();
        return $query->fetch();
    }

    public function atualizar($id){
        $sql = "UPDATE especialidades SET nome= :nome where id=:id ";
        $query = Conexao::prepare($sql);
        $query->bindValue(":id", $id);
        $query->bindValue(":nome", $this->getNome());
        $query->execute();
    }

    public function deletar($id){
        $sql = "DELETE FROM especialidades WHERE id= :id";
        $query = Conexao::prepare($sql);
        $query->bindValue(":id", $id);
        $query->execute();
    }
   
}
 