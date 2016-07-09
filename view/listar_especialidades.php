<?php
include_once '../control/EspecialidadeControl.php';
$especialidadeControl = new EspecialidadeControl();

//print_r($especialidadeControl->listarTodos());
?>

<table >
    <tr>
        <th>id</th>
        <th>nome</th>
    </tr>
   <?php 
    foreach ($especialidadeControl->listarTodos() as $especialidade) {
       ?>
        <tr>
            <td><?php echo $especialidade->id; ?></td>
            <td><?php echo $especialidade->nome; ?></td>
        </tr>
   <?php } ?>
</table>
