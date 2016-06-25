<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario
 *
 * @author PHP - MySQL
 */
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


}
