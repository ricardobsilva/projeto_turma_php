<?php include_once '../style/template.php';  ?>
    
<div class=" col-sm-4 col-sm-offset-5">
    <h1>Entrar</h1>
</div>  

<div class="jumbotron col-sm-4 col-sm-offset-4 col-xs-2">
    <form method="POST">
        <label> email </label>
        <input class="form-control" name="email">
        <label> senha </label>
        <input class="form-control" name="senha" type="password">
        <br>
        <input type="submit" class="btn btn-primary btn-block" value="logar" name="salvar">
    </form>    
</div>


<?php include_once '../style/footer.php';?>