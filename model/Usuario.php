<?php

include_once '../db/Conexao.php';
class Usuario {
   private $id ;
   private $nome;
   private $email;
   private $senha;
   
   function getId() {
       return $this->id;
   }

   function getNome() {
       return $this->nome;
   }

   function getEmail() {
       return $this->email;
   }

   function getSenha() {
       return $this->senha;
   }

   function setId($id) {
       $this->id = $id;
   }

   function setNome($nome) {
       $this->nome = $nome;
   }

   function setEmail($email) {
       $this->email = $email;
   }

   function setSenha($senha) {
       $this->senha = $senha;
   }
   
   public function listarTodosUsuarios() {
       $sql = "select * from usuarios";
       $query = Conexao::prepare($sql);
       $query->execute();
       return $query->fetchAll();
   }

   public function logar($email, $senha){
      $sql = 'SELECT * FROM usuarios where '
              . ' email = :email AND senha = :senha';
      $query = Conexao::prepare($sql);
      $query->bindValue(':email',$email);
      $query->bindValue(':senha',$senha);
      $query->execute();
      return $query->rowCount();
   }
}
