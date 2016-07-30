<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProfessorControl
 *
 * @author PHP - MySQL
 */

require_once '../model/Professor.php';

class ProfessorControl {
    public function inserir() {
        $professor = new Professor();
        
        $numero_contribuinte = $_POST['numero_contribuinte'];
        $nome = $_POST['nome'];
        $nascimento = $_POST['nascimento'];
        $carga_horaria = $_POST['carga_horaria'];
        $especialidade_id = $_POST['especialidade_id'];
        
        $professor->setNumero_contribuinte($numero_contribuinte);
        $professor->setNome($nome);
        $professor->setNascimento($nascimento);
        $professor->setCarga_horaria($carga_horaria);
        $professor->setEspecialidade_id($especialidade_id);
        $professor->salvar();
        
    }
    
    public function listarTodos(){
        $professor = new Professor();
        return $professor->buscarTodos();
    }
    
    public function buscar(){
        
    }
    
    public function editar(){
        
    }
    
    public function deletar(){
        
    }
}
