<?php

include_once '../model/Usuario.php';
class UsuarioControl {
    public function inserir() {
        
    }
    
    public function listarTodos(){
       $usuario = new Usuario();
       return $usuario->listarTodosUsuarios();
    }
    
    public function buscar(){
        
    }
    
    public function editar(){
        
    }
    
    public function deletar(){
        
    }


    public function login(){
        $email = $_POST['email'];
        $senha = $_POST['senha'];
     
        $usuario = new Usuario();
        $quantidadeEncontradaDeUsuarios = $usuario->logar($email, $senha);

        if ($quantidadeEncontradaDeUsuarios > 0){
            header('Location: listar_especialidades.php');
        }else{
            header('Location: login.php');
        }
    }
}
