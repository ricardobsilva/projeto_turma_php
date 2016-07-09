<?php
    include_once '../control/UsuarioControl.php';
    $usuarioControl = new UsuarioControl();
    
?>

<?php

foreach ($usuarioControl->listarTodos() as $usuario) {
    echo $usuario->email;
}
?>

