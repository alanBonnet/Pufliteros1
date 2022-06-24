<?php include('../includes/header.php')?>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
            <div class="container px-5">
                <a class="navbar-brand" href="#page-top">TCAD</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="#!">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Foro</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Preguntas Frecuentes</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Contáctanos</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Iniciar Sesión</a></li>
                        <li class="nav-item">
                        <a class="nav-link" href="#!" data-bs-toggle="modal" data-bs-target="#RegistrarseModal">Registrarse</a>
                        <!-- fijate en el archivo que está en 
                            Puflitero1/includes/modals/modalRegister.php
                             para cambiar la vista del modal -->
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="masthead text-center text-white">
            <div class="masthead-content">
                <div class="container px-5">
                    <h1 class="masthead-heading mb-0">Que ofrecemos</h1>
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
                        <div class="p-5"><img class="img-fluid rounded-circle" src="assets/img/kurrrikulum.webp" alt="..." /></div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="p-5">
                            <h2 class="display-4">Visión de un problema</h2>
                            <p>Se ve el caso de que los estudiantes de secundaria salen egresados y no consiguen su primer trabajo para adquirir experiencia, deben estar recorriendo por todas las empresas y lugares de trabajo estatal  presentando currículum y encontrarse con que la mayoría de las empresas requieren ya de profesionales con experiencia laboral y no se arriesgan a contratarlos, tardan mucho tiempo y espacio hasta encontrar una empresa que los contrate.</p>
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
                        <div class="p-5"><img class="img-fluid rounded-circle" src="assets/img/02.jpg" alt="..." /></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <h2 class="display-4">Nuestro objetivo</h2>
                            <p></p>
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
                        <div class="p-5"><img class="img-fluid rounded-circle" src="assets/img/03.jpg" alt="..." /></div>
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
        <!-- Modales -->
            <?php include('../includes/modals/modalRegister.php')?>


<?php include('../includes/footer.php')?>