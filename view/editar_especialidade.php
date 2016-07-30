<?php include_once '../style/template.php';
      include_once '../control/EspecialidadeControl.php';
      $espControl = new EspecialidadeControl();
      
      $id = $_GET['id'];
      $especialidade = $espControl->buscar($id);

      if(isset($_POST['salvar'])){
        $espControl->editar();
        header("Location: listar_especialidades.php");
      }
?>


<div class="col-sm-5 col-sm-offset-3 jumbotron" >
    <h2 >Editar Especialidade</h2> 
    <br>
    <form method="POST">
        <input type="hidden" name="id" value="<?php echo $especialidade->id?>">
        <label>Nome</label>    
        <input class="form-control" name="nome_especialidade" required="" value="<?php echo $especialidade->nome; ?>" > 
        <br>    
        <input name="salvar" type="submit" value="salvar" class="btn btn-info btn-sm">
    </form>    
</div>    
    
    
    
    
    
    
    
    
<?php include_once '../style/footer.php';?>