<?php
include("../core/db.php");
/*
    $saludo = "Ejemplo PHP Mongolito";
    $empleados = array();
    $empleados=array("Nombre"=>"Juan", "Apellido"=>"Buendonado","Edad"=>23);
    // for($i =0 ; $i<3;$i++){
    //     echo "<h5>$empleados[$i]</h5>";
    // }
    foreach ($empleados as $Nombre => $value) {
        echo "<h3>$Nombre : $value</h3>";
    }
    count($empleados);
    echo "<h1>$saludo</h1>";
    
    echo "<h2>Un codigo embebido desde php</h2>";
    $jefes[]=["Nombre"=>"Alan","Apellido"=>"Bonnet","Edad"=>23];
    foreach ($jefes as $key => $value) {
        foreach ($value as $key => $value) {
            echo "<br>";
            echo "<h1>$key es $value</h1>";
        }
    }

    */
    $needLogin = true
  /*pinto el navbar y luego el content*/

  ?>
  

  <div class="container">
  <h3 class="rounded my-2 text-center p-2 bg-orange text-light">Tu página ideal para crear un CV y
    compartirlo con tus futuros empleadores</h3>
    <?php
      if($needLogin){
        echo '
        <div class="row rounded" id="ingresar">
        <div id="botonera" class="bg-orange col-10 col-sm-6 mx-auto py-5 my-2 rounded text-center">
        <button class="btn btn-outline-light mx-lg-4 btn-lg" onclick="ingresarDo()" id="btn-login">Ingresar</button>
        <button class="btn btn-outline-light mx-lg-4 btn-lg" onclick="registrarDo()" id="btn-singin">Registrarse</button>
        </div>
      </div>';
      }else{
        /*acá entraría lo que debería aparecer en caso de que el usuario ya esté logeado*/
      }
    ?>
  </div>