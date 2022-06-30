<div style="margin-left:2rem;margin-right:2rem;">
<?php
     
      include('../../core/db.php');
    if(isset($_POST['registro'])){
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $passConfirm = $_POST['comfirmPassword'];
        
        
        if( strlen($pass)>=8 && strlen($nombre)>=8){
            if($pass == $passConfirm){
                if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                    $usuario = $conn->query("select * from usuarios where nombre = '$nombre'")->fetch(PDO::FETCH_ASSOC);
                    if ($usuario == false) {      
                        $sql = "INSERT INTO usuarios(nombre , email , contrasenia) VALUES(:nombre , :email, :pass)";
                        $nuevoUsuario = $conn->prepare($sql);
                        
                        $nuevoUsuario->execute([":nombre" => $nombre, ":email"=> $email , ":pass" => $pass]);
                        $count = $nuevoUsuario->rowCount();
                        if ($count == 1){
                            $titulo = "Bienvenido ".$nombre;
                            echo $titulo;
                            //$nuevoUsuario->commit;
                        }else{
                           // $nuevoUsuario-> rollBack();
                        }
                    }else{
                        echo "hola";
                    }

                    
                }else{
                    echo " email no válido ";
                }
                
            }else{
                echo "No son iguales";
            }
        }else{
            echo "el password es muy corto o el nombre de usuario lo es";
        }
        
    }

?>
</div>