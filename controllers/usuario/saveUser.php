<div style="margin-left:2rem;margin-right:2rem;">
<?php
     session_start();
      include('../../core/db.php');
    if(isset($_POST['registro'])){
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $passConfirm = $_POST['comfirmPassword'];
        
        $mensaje= "";
        $alertColor= "alert-success";
        $_SESSION['alertColor'] = $alertColor;
        $titulo = "Error";
        $_SESSION['titulo'] = $titulo;
        if( strlen($pass)>=8){
            if ( strlen($nombre)>=8){
                if($pass == $passConfirm){
                    if(filter_var($email, FILTER_VALIDATE_EMAIL)){

                        $usuario = $conn->query("select * from usuarios where nombre = '$nombre' and email = '$email'")->fetch(PDO::FETCH_ASSOC);

                        if ($usuario == false) {      
                            $sql = "INSERT INTO usuarios(nombre, email, password) VALUES(:nombre , :email, :pass)";

                            $nuevoUsuario = $conn->prepare($sql);

                            $nuevoUsuario->execute([":nombre" => $nombre, ":email"=> $email , ":pass" => $pass]);

                            $count = $nuevoUsuario->rowCount();
                            if ($count == 1){
                                $mensaje = "Bienvenido ".$nombre;
                                $_SESSION['isLogged'] = true;
                                $_SESSION['usuario'] = $nombre;
                                $_SESSION['mensaje'] = $mensaje;
                                header('Location: ../../php/index.php');
                                
                                
                                //$nuevoUsuario->commit;
                            }else{
                               $mensaje = 'No se pudo registrar el usuario, por favor intente mas tarde.';
                               $_SESSION['mensaje'] = $mensaje;
                               $alertColor ="alert-danger";
                               header('Location: ../../php/index.php');
                               
                            }
                        }else{
                            $mensaje = 'El usuario y/o correo ya existe.';
                            $_SESSION['mensaje'] = $mensaje;
                            $alertColor="alert-danger";
                            header('Location: ../../php/index.php');
                        }
                    }else{
                        $mensaje = 'Email no valido.';
                        $_SESSION['mensaje'] = $mensaje;
                        $alertColor="alert-danger";
                        header('Location: ../../php/index.php');
                    }
                    
                }else{
                    $mensaje= 'Las contraseñas no coinciden.';
                    $_SESSION['mensaje'] = $mensaje;
                    $alertColor="alert-danger";
                    header('Location: ../../php/index.php');
                }
            }else{
                $nombre = 'El nombre de usuario es muy corto, el mínimo es de 8 carácteres.';
                $_SESSION['mensaje'] = $mensaje;
                $alertColor="alert-danger";
                header('Location: ../../php/index.php');
            }
        }else{
            $nombre = "La contraseña es muy corta, el mínimo es de 8 carácteres.";
            $_SESSION['mensaje'] = $mensaje;
            $alertColor="alert-danger";
            header('Location: ../../php/index.php');
        }
        
    }

?>
</div>