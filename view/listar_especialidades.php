<?php
include_once '../control/EspecialidadeControl.php';
$especialidadeControl = new EspecialidadeControl();

print_r($especialidadeControl->listarTodos());
?>


<?php

foreach ($especialidadeControl->listarTodos() as $especialidade) {
    echo $especialidade->id . '/';
    echo $especialidade->nome . '/';
}

?>
