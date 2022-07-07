<?php
    include('../../core/db.php');
    session_start();
    if( isset( $_POST['login'] ) ){
        $usuario = $_POST['nombre'];
        $pass = $_POST['password'];
        $row;
        $sql = "SELECT * FROM usuarios WHERE nombre = '$usuario' AND password = '$pass' ";
        foreach ($conn->query($sql) as $row) {
            
        }
        $existUser = $conn -> query($sql);
        $idUser = $row['idUsuario'];
        $count = $existUser->rowCount();
        if($count === 1){
            $_SESSION['idUser']=$idUser;
            $_SESSION['isLogged'] = true;
            $_SESSION['usuario'] = $usuario;
            $mensaje= "hola $usuario";
            $_SESSION['mensaje'] = $mensaje;
            $rowCV;
            $sqlCV = "SELECT * FROM curriculums where id_usuario = $idUser";
            $existeCV = $conn->query($sqlCV);
            foreach ($existeCV as $rowCV) {
                
            }
            $countCV = $existeCV->rowCount();
            if($countCV === 1){
                $_SESSION['vCV'] = true;
            }else{
                $_SESSION['vCV'] = false;
            }
            $_SESSION['curriculum'] = $rowCV;
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