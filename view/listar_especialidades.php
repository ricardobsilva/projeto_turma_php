<?php
include_once '../style/template.php';
include_once '../control/EspecialidadeControl.php';
$especialidadeControl = new EspecialidadeControl();
    
    if(isset($_GET['id'])){
         $especialidadeControl->deletar(); 
        ?>
            <div class="alert alert-danger" role="alert"> deletado com sucesso</div>  
        <?php
    }


?>
<div class="col-sm-10 col-sm-offset-1">
    
    
    <h1>Especialidades</h1>
    
    <a href="cadastrar_especialidade.php" class="pull-right btn btn-primary btn-xs">cadastrar especialidade</a>
    
    <table class="table table-hover" >
        <tr>
            <th>id</th>
            <th>nome</th>
            <th></th>
        </tr>
       <?php 
        foreach ($especialidadeControl->listarTodos() as $especialidade) {
           ?>
            <tr>
                <td><?php echo $especialidade->id; ?></td>
                <td><?php echo $especialidade->nome; ?></td>
                <td>
                    <div class="pull-right">
                        <?php echo "<a href='editar_especialidade.php?acao=editar&id=".$especialidade->id."'>editar</a> "?>
                        |
                        <?php echo "<a href='listar_especialidades.php?acao=deletar&id=".$especialidade->id."'>deletar</a> "?>
                    </div>
                </td>
            </tr>
       <?php } ?>
    </table>
</div>
<?php include_once '../style/footer.php'; ?>