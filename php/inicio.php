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
    $needLogin = false
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
        ?>
          <!-- Header-->
            <header class="masthead text-center text-white">
                <div class="masthead-content">
                    <div class="container px-5">
                        <h1 class="masthead-heading mb-0">Qué ofrecemos</h1>
                        <a class="btn btn-primary btn-xl rounded-pill mt-5" href="#scroll">Mostrar más</a>
                    </div>
                </div>
                <div class="bg-circle-1 bg-circle"></div>
                <div class="bg-circle-2 bg-circle"></div>
                <div class="bg-circle-3 bg-circle"></div>
                <div class="bg-circle-4 bg-circle"></div>
            </header>
            <!-- Content section 1-->
            <section id="scroll">
                <div class="container px-5">
                    <div class="row gx-5 align-items-center">
                        <div class="col-lg-6 order-lg-2">
                            <div class="p-5"><img class="img-fluid rounded-circle" src="../New Model/assets/img/01.jpg" alt="..." /></div>
                        </div>
                        <div class="col-lg-6 order-lg-1">
                            <div class="p-5">
                                <h2 class="display-4"></h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Content section 2-->
            <section>
                <div class="container px-5">
                    <div class="row gx-5 align-items-center">
                        <div class="col-lg-6">
                            <div class="p-5"><img class="img-fluid rounded-circle" src="../New Model/assets/img/02.jpg" alt="..." /></div>
                        </div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <h2 class="display-4">We salute you!</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Content section 3-->
            <section>
                <div class="container px-5">
                    <div class="row gx-5 align-items-center">
                        <div class="col-lg-6 order-lg-2">
                            <div class="p-5"><img class="img-fluid rounded-circle" src="../New Model/assets/img/03.jpg" alt="..." /></div>
                        </div>
                        <div class="col-lg-6 order-lg-1">
                            <div class="p-5">
                                <h2 class="display-4">Let there be rock!</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php
      }
    ?>
  </div>