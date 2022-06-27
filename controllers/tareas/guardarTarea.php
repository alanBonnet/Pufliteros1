<?php
    include("../../core/db.php");

    if(isset($_POST['save_task'])){
        try{
            $conexion->beginTransaction();
            $title = $_POST['title'];
            $description = $_POST['description'];
            
            $sql = "INSERT INTO tareas(nombre, descripcion) VALUES (':nombre',':descripcion')";
            $tarea = $conexion->prepare($sql);
            // $tarea->bindParam(':nombre',$title);
            // $tarea->bindParam(':descripcion',$description);
            $tarea->execute(array(':nombre'=>$title,
                                ':descripcion'=>$description));
                
            $contador= $tarea->rowCount();
            $fecha = date_create();
            $zonaHoraria = new DateTimeZone('-0300') ;
            $fecha->setTimezone($zonaHoraria);
            print_r($fecha);
            
            if($contador == 1){
                $conexion->commit();
                echo "Usuario ingresado correctamente";
            }else{
                $conexion->rollBack();
                echo "El usuario no pudo ser ingresado, intente mas tarde";
            }
        }
        catch(\Throwable $th){
            echo $th -> getMessage()." valiste pija";
        }
        // $result = mysqli_query($conexion,$query);
        // if(!$result){
        //     die("Query failed");
        // }else{
        //     header("Location: ../php/index.php");
        // }
    }

?>