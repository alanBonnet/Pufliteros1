<?php
    include('../../core/db.php');
    session_start();
    if( isset( $_POST['login'] ) ){
        $usuario = $_POST['nombre'];
        $pass = $_POST['password'];

        $sql = "SELECT * FROM usuarios WHERE nombre = '$usuario' AND password = '$pass' ";

        $existUser = $conn -> query($sql);
        $mensaje = "";
        $count = $existUser->rowCount();
        if($count === 1){
            
            $_SESSION['isLogged'] = true;
            $_SESSION['usuario'] = $usuario;
            $mensaje= "hola $usuario";
            $_SESSION['mensaje'] = $mensaje;
            
            header('Location: ../../NewModel/index.php');
        }else{
            $mensaje = "Usuario no encontrado, puede que se esté equivocando en algún campo";
            $_SESSION['mensaje'] = $mensaje;
            $icon = '<i class="bi bi-people text-danger"></i>';
            $_SESSION['icono'] = $icon;
            $_SESSION['titulo'] = "Error";
            header('Location: ../../includes/confirmar.php');
        }
    }


?>