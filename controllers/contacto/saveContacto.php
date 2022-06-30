<?php
    include('../../core/db.php');
    if( isset($_POST['contactUs']) ){
        $nombreContacto =  $_POST['nombre_contacto'];
        $opinionContacto = $_POST['opinion_contacto'];
        $sql = "INSERT INTO contacto(nombre_contacto, opinion_contacto) VALUES(:nombre_contacto , :opinion_contacto)";

                            $nuevoContacto = $conn->prepare($sql);

                            $nuevoContacto->execute([":nombre_contacto"=> $nombreContacto , ":opinion_contacto" => $opinionContacto]);

                            $count = $nuevoContacto->rowCount();
                            if ($count == 1){
                                $mensaje ="se envió el contacto";
                                header('Location: ../../php/index.php');
                                
                                // contacto => id_contacto INT(11) PK A_I, 
                                            // nombre_contacto VARCHAR(60),
                                            // opinion_contacto TEXT(500) ,
                                            // createdAt DATESTAMP;
                                
                            }else{
                               $mensaje = 'No se pudo registrar el usuario, por favor intente mas tarde.';
                               header('Location: ../../php/index.php');
                           
                            }
    }
