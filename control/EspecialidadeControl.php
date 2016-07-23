<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once '../model/Especialidade.php';

class EspecialidadeControl {
    public function inserir() {
        $nome = $_POST['nome_especialidade']; 
        
        $especialidade = new Especialidade();    
        $especialidade->setNome($nome);
        $especialidade->salvar();
        
        
    }
    
    public function listarTodos(){
       $especialidade = new Especialidade();
       return $especialidade->listarTodasEspecialidades();
    }
    
    public function buscar(){
        
    }
    
    public function editar(){
        
    }
    
    public function deletar(){
        
    }
}
