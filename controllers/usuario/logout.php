<?php
    session_start();
    // limpia la variable global (? por las dudas jasjajs)
    $_SESSION=array();
    // se mata la sesión
    session_destroy();
    // redireccionamos al index
    header('Location: ../../php/index.php')

?>