<?php include('../../core/db.php'); 
    
    if(isset($_POST['newCv'])){
        session_start();
        $nombreApellido = $_POST['nombreapellido'];
        $jobusca = $_POST['jobusca'];
        $emailcurriculum = $_POST['emailcurriculum'];
        $nrotelefono = $_POST['nrotelefono'];
        $experience = $_POST['experience'];
        $intereses = $_POST['intereses'];
        $eduycali = $_POST['eduycali'];
        $skills = $_POST['skills'];

        $idUser = $_SESSION["idUser"];
        //$sql1 = "SELECT * FROM usuarios where idUsuario = $idUser";
        // foreach ($conn->query($sql) as $row) {
        //     print $row['idUsuario'] . "\t";
        //     print $row['nombre'] . "\t";
        //     print $row['email'] . "\n";
        //     print $row['password'] . "\n";
        //     print $row['fechaCreacion'];
        // }
        $existeCvSQL = "SELECT * FROM curriculums WHERE id_usuario = $idUser";
        $existeCV = $conn->query($existeCvSQL);
        $countCV = $existeCV->rowCount();
        if($countCV === 1){
            echo "El curriculum ya existe" ;
        }else{
            $sql = "INSERT INTO `curriculums`
            (`id_usuario`, `nombre_y_apellido`,
             `trabajo_interes`, `email_curriculum`, `nro_telefono`,
             `experiencia`, `intereses`, `educacion_calificacion`, `habilidades`) 
                VALUES (:id_usuario, :nombre_y_apellido, :trabajo_interes , 
                        :email_curriculum ,:nro_telefono, :experiencia , 
                        :intereses , :educacion_calificacion ,:habilidades)";

                            $nuevoCv = $conn->prepare($sql);

                            $nuevoCv->execute([":id_usuario" => $idUser, ":nombre_y_apellido" => $nombreApellido,
                                               ":trabajo_interes" => $jobusca,":email_curriculum" => $emailcurriculum,
                                               ":nro_telefono" => $nrotelefono, ":experiencia" => $experience,
                                               ":intereses" => $intereses, ":educacion_calificacion" => $eduycali,
                                               ":habilidades" => $skills]);

                            $count = $nuevoCv->rowCount();
                            if ($count == 1){
                                $mensaje ="curriculum creado";
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
        
    }
?>