<?php include('../../core/db.php');
    
    if(isset($_POST['registro'])){
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $passConfirm = $_POST['comfirmPassword'];
        
        
        if( strlen($pass)>=8){
            if($pass == $passConfirm){
                if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                    
                    
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

