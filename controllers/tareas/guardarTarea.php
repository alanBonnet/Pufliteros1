<?php
    include("../../core/db.php");

    if(isset($_POST['save_task'])){
        $title = $_POST['title'];
        $description = $_POST['description'];
        

        $tarea = $conexion->prepare("INSERT INTO tareas(nombre, descripcion) VALUES (':nombre',':descripcion')");
        $tarea->bindParam(':nombre',$title);
        $tarea->bindParam(':descripcion',$description);
        $tarea->execute();

        $contador= $tarea->rowCount();
        if($contador == 1){
            echo "creado";
        }else{
            echo "no se pudo pa";
        }
        // $result = mysqli_query($conexion,$query);
        // if(!$result){
        //     die("Query failed");
        // }else{
        //     header("Location: ../php/index.php");
        // }
    }

?>