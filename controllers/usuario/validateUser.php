<?php
    include('../../core/db.php');
    
    if( isset( $_POST['login'] ) ){
        $usuario = $_POST['nombre'];
        $pass = $_POST['password'];

        $sql = "SELECT * FROM usuarios WHERE nombre = '$usuario' AND password = '$pass' ";

        $existUser = $conn -> query($sql);

        $count = $existUser->rowCount();
        if($count === 1){
            session_start();
            $_SESSION['isLogged'] = true;
            $_SESSION['usuario'] = $usuario;
            $mensaje = "Hola $usuario como estas?";
            header('Location: ../../NewModel/index.php');
        }else{
            $mensaje = "Usuario no encontrado, puede que se esté equivocando en algún campo";
            echo $mensaje;
        }
    }


?>