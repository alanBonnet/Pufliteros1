<?php include('../../core/db.php');
    
    if(isset($_POST['registro'])){
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $passConfirm = $_POST['comfirmPassword'];
        
        
        if( strlen($pass)>=8){
            if($pass == $passConfirm){
                if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                    $sql = "INSERT INTO usuarios VALUES(':nombre',':email',':pass')";
                    $nuevoUsuario = $conexion->prepare($sql);
                    $nuevoUsuario->bindParam(':nombre',$nombre);
                    $nuevoUsuario->bindParam(':email',$email);
                    $nuevoUsuario->bindParam(':password',$password);
                    $nuevoUsuario->execute();
                    $count = $nuevoUsuario->rowCount();
                    if ($count == 1){
                        $titulo = "Bienvenido".$nombre;
                        
                    }
                }else{
                    echo " email no válido ";
                }
                
            }else{
                echo "No son iguales";
            }
        }else{
            echo "el password es muy corto";
        }
        
    }

