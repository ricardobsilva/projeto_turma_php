<?php include_once '../style/template.php';
      include_once '../control/ProfessorControl.php';
      include_once '../control/EspecialidadeControl.php';
      $profControl = new ProfessorControl();
      $especialidades = new EspecialidadeControl();
      
      if(isset($_POST['salvar'])){
          $profControl->inserir();
          ?>
        <div class="alert alert-success" role="alert"> salvo com sucesso</div>  
      <?php }
?>
        <div class="col-sm-8 col-sm-offset-2 jumbotron">
            <h3>Novo Professor</h3>
            <form method="POST">
                <label>Numero contribuinte</label>
                <input name="numero_contribuinte" class="form-control">
                <label>Nome</label>
                <input name="nome" class="form-control">
                <div class="row">
                    <div class="col-sm-6">
                        <label>Nascimento</label>
                        <input name="nascimento" type="date" class="form-control">
                    </div>
                    <div class="col-sm-6">
                        <label>Carga horaria</label>
                        <input name="carga_horaria" type="number" class="form-control">
                    </div>
                </div>
                <label>Especialidade</label>
                <select name="especialidade_id" class="form-control">
                    <?php foreach ($especialidades->listarTodos() as $especialidade) { ?>
                        <option value="<?php echo $especialidade->id;?>"><?php echo $especialidade->nome;?></option>
                    <?php } ?>
                </select>
                <br>
                <input type="submit"  name="salvar" class="btn btn-primary">
            </form>
        </div>  

        
            
    

        
<?php  include_once '../style/footer.php'; ?>

        
        
       