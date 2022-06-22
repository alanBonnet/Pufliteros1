<?php
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
    $navbar = '<nav class="navbar navbar-expand-lg navbar-dark bg-orange">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Pufliteros</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto me-sm-4 mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Sobre Nosotros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"> </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>';
  $formularioIngreso='<div class="row rounded" id="ingresar">
  <div id="botonera" class="bg-orange col-10 col-sm-6 mx-auto py-5 my-2 rounded text-center">
  <button class="btn btn-outline-light mx-lg-4 btn-lg" onclick="ingresarDo()" id="btn-login">Ingresar</button>
  <button class="btn btn-outline-light mx-lg-4 btn-lg" onclick="registrarDo()" id="btn-singin">Registrarse</button>
  </div>
</div>';
  $content= '<div class="container">
  <h3 class="rounded my-2 text-center p-2 bg-orange text-light">Tu página ideal para crear un CV y
    compartirlo con tus futuros empleadores</h3>
  
  </div>';
  /*pinto el navbar y luego el content*/
  echo $navbar;
  echo $formularioIngreso;

  ?>
  