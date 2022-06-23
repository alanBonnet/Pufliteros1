
<?php
    $conexion = mysqli_connect(
        'localhost',
        'root',//root es el user de la dba
        '',//alan14 es el pass de la dba
        'pufliteros'//este es el nombre de la db a usar

    );
    /* con este código se verifica si conecta a la base de datos*//*
    if(isset($conexion)){
        echo "Conectado a la db";
    }else{
        echo"No conectado al db";
    }*/
?>