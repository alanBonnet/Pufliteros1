<?php include('./header.php');
session_start() ?>
<?php include('./navbar.php') ?>

<div class="container mt-5 pt-5" style="min-height:calc(100vh - 100px);">
    <div class="row">

        <body class="bg-light">
            <div class="container p-5">
                <div class="row">
                    <div class="col-lg-4 bg-dark text-white text-center py-4">
                        <div class="header-left">
                            <!-- <img src="/NewModel/assets/img/2da img.jpg" alt="" class="img-thumbnail rounded-circle mb-2"> -->
                            <h1 class="display-5"><?php echo $_SESSION['curriculum']['nombre_y_apellido'] ?></h1>
                            <h4 class="lead text-uppercase text-white-50 nb-4">Para: <?php echo ucwords($_SESSION['curriculum']['trabajo_interes']) ?></h4>
                        </div>

                        <div>
                            <h5 class="text-uppercase bg-white text-dark py-2 rounded-pill">Contacto</h5>

                            <ul class="list-unstyled text-white-50 ml-5 py-2 text-left">
                                <li class="list-item">
                                    <i class="fas fa-mobile-alt mx-4"></i>
                                    <?php echo $_SESSION['curriculum']['nro_telefono'] ?>
                                </li>
                                <li class="list-item">
                                    <i class="fas fa-envelope-open-text mx-4"></i>
                                    <?php echo $_SESSION['curriculum']['email_curriculum'] ?>
                                </li>
                                <!-- <li class="list-item">
                                    <i class="fas fa-blog mx-4"></i>
                                    wwww.ejemplo.com
                                </li> -->
                                <li class="list-item">
                                    <i class="fas fa-map-marker-alt mx-4"></i>
                                    Formosa, Ciudad
                                </li>
                            </ul>
                        </div>

                        <div>
                            <h5 class="text-uppercase bg-white text-dark py-2 rounded-pill">Habilidades</h5>
                            <ul class="list text-white-50 ml-5 py-2 text-left text-capitalize">
                                <li class="list-item"><?php echo $_SESSION['curriculum']['habilidades'] ?></li>
                                
                            </ul>
                        </div>

                        <div>
                            <h5 class="text-uppercase bg-white text-dark py-2 rounded-pill">Educación</h5>
                            <ul class="list text-white-50 ml-5 py-2 text-left text-capitalize">
                                <li class="list-item"><?php echo $_SESSION['curriculum']['educacion_calificacion'] ?></li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8 bg-light text-dark py-5 px-5">
                        <div class="head-right">
                            <h4 class="text-uppercase">Perfil</h4>
                            <p><?php echo $_SESSION['curriculum']['intereses'] ?></p>
                        </div>
                        <hr>
                        <div>
                            <h4 class="text-uppercase">Experiencia en el trabajo</h4>
                            <hr>

                            <ul class="list">
                                <li class="list-item">
                                <?php echo $_SESSION['curriculum']['experiencia'] ?>
                                </li>
                                <!-- <li class="list-item">
                                    <h5 class="display-6 text-uppercase">Marketing en linea</h5>
                                    <h6 class="text-uppercase text-black-50">nombre de la comapia / ejemplo</h6>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita tenetur repellat quae at magnam distinctio quidem eius explicabo pariatur ipsum asperiores dicta natus corrupti exercitationem, numquam nemo voluptates rem qui doloremque molestias in, quasi sunt! Asperiores officia architecto maxime enim vel rem accusamus quidem, beatae itaque maiores. Aperiam, exercitationem repellendus?</p>
                                </li>
                                <li class="list-item">
                                    <h5 class="display-6 text-uppercase">Marketing en linea</h5>
                                    <h6 class="text-uppercase text-black-50">nombre de la comapia / ejemplo</h6>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita tenetur repellat quae at magnam distinctio quidem eius explicabo pariatur ipsum asperiores dicta natus corrupti exercitationem, numquam nemo voluptates rem qui doloremque molestias in, quasi sunt! Asperiores officia architecto maxime enim vel rem accusamus quidem, beatae itaque maiores. Aperiam, exercitationem repellendus?</p>
                                </li> -->
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </body>

    </div>
</div>
<?php include('./footer.php') ?>