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
}
