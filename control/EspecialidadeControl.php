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
    
    public function buscar($id){
        $especialidade = new Especialidade();
        return $especialidade->buscar($id);
         
    }
    
    public function editar(){
        $especialidade = new Especialidade();    

        $nome = $_POST['nome_especialidade']; 
        $id = $_POST['id'];


        $especialidade->setNome($nome);
        $especialidade->atualizar($id);
           
    }
    
    public function deletar(){
        $especialidade = new Especialidade();
        $id = $_GET['id'];
        $especialidade->deletar($id);
    }
}
