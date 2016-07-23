<?php include_once '../style/template.php';
      include_once '../control/EspecialidadeControl.php';
      $espControl = new EspecialidadeControl();
      
      if(isset($_POST['salvar'])){
          $espControl->inserir();
          ?>
        <div class="alert alert-success" role="alert"> <?php echo $_POST['nome_especialidade']?> salvo com sucesso</div>  
      <?php }
?>


<div class="col-sm-5 col-sm-offset-3 jumbotron" >
    <h2 >Nova Especialidade</h2> 
    <br>
    <form method="POST">
        <label>Nome</label>    
        <input class="form-control" name="nome_especialidade" required="" > 
        <br>    
        <input name="salvar" type="submit" value="salvar" class="btn btn-info btn-sm">
    </form>    
</div>    
    
    
    
    
    
    
    
    
<?php include_once '../style/footer.php';?>