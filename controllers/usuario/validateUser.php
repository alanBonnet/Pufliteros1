<?php
    include('../../core/db.php');
    session_start();
    if( isset( $_POST['login'] ) ){
        $usuario = $_POST['nombre'];
        $pass = $_POST['password'];
        $row;
        $sql = "SELECT * FROM usuarios WHERE nombre = '$usuario' AND password = '$pass' ";
        foreach ($conn->query($sql) as $row) {
            print $row['idUsuario'] . "\t";
            print $row['nombre'] . "\t";
            print $row['email'] . "\n";
            print $row['password'] . "\n";
            print $row['fechaCreacion'];
        }
        $existUser = $conn -> query($sql);
        $mensaje = "";
        $count = $existUser->rowCount();
        if($count === 1){
            $_SESSION['idUser']=$row['idUsuario'];
            $_SESSION['isLogged'] = true;
            $_SESSION['usuario'] = $usuario;
            $mensaje= "hola $usuario";
            $_SESSION['mensaje'] = $mensaje;
            
            header('Location: ../../php/index.php');
        }else{
            $_SESSION['errorLog']= true;
            $mensaje = "Usuario no encontrado, puede que se esté equivocando en algún campo";
            $_SESSION['mensaje'] = $mensaje;
            $icon = '<i class="bi bi-exclamation-triangle-fill text-danger"></i>';
            $_SESSION['icono'] = $icon;
            $_SESSION['titulo'] = "Error";
            header('Location: ../../php/index.php');
        }
    }


?>