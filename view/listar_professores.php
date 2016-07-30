<?php
include_once '../style/template.php';
include_once '../control/ProfessorControl.php';
$professorControl = new ProfessorControl();
    
   
?>
<div class="col-sm-10 col-sm-offset-1">
    
    
    <h1>Professores</h1>
    
    <a href="cadastrar_especialidade.php" class="pull-right btn btn-primary btn-xs">cadastrar especialidade</a>
    
    <table class="table table-hover" >
        <tr>
            <th>id</th>
            <th>nome</th>
            <th>especialidade</th>
            
        </tr>
       <?php 
        foreach ($professorControl->listarTodos() as $professor) {
           ?>
            <tr>
                <td><?php echo $professor->id; ?></td>
                <td><?php echo $professor->professor_nome; ?></td>
                <td><?php echo $professor->nome_especialidade; ?></td>
                
            </tr>
       <?php } ?>
    </table>
</div>
<?php include_once '../style/footer.php'; ?>