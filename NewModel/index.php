<?php include('../includes/header.php');session_start() ?>

<body id="page-top">
    <?php include('../includes/navbar.php')?>
    <!-- Header-->
    <header class="masthead text-center text-white" id="inicio">
        <div class="masthead-content">
            <div class="container px-5">
                <h1 class="masthead-heading mb-0 animate__animated animate__bounceIn">La AppWeb ideal para hacer de tu busqueda de trabajo más simple</h1>
                <h1 class="text-dark animate__animated animate__bounceIn">¿Quiéres saber sobre el proyecto?</h1>
                <a class="btn btn-primary btn-xl rounded-pill mt-5 animate__animated animate__bounceIn" href="#scroll">Mostrar más</a>
            </div>
        </div>
        <div class="bg-circle-1 bg-circle"></div>
        <div class="bg-circle-2 bg-circle"></div>
        <div class="bg-circle-3 bg-circle"></div>
        <div class="bg-circle-4 bg-circle"></div>
    </header>
    <!-- Content section 1-->
    <section id="scroll">
        <div class="container px-5" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <div class="p-5"><img class="img-fluid rounded-circle" src="assets/img/kurrrikulum.webp" alt="..." /></div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="p-5">
                        <h2 class="display-4">Visión de un problema</h2>
                        <p>Se ve el caso de que los estudiantes de secundaria salen egresados y no consiguen su primer trabajo para adquirir experiencia, deben estar recorriendo por todas las empresas y lugares de trabajo estatal presentando currículum y encontrarse con que la mayoría de las empresas requieren ya de profesionales con experiencia laboral y no se arriesgan a contratarlos, tardan mucho tiempo y espacio hasta encontrar una empresa que los contrate.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Content section 2-->
    <section>
        <div class="container px-5" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6">
                    <div class="p-5"><img class="img-fluid rounded-circle" src="assets/img/2da img.jpg" alt="..." /></div>
                </div>
                <div class="col-lg-6">
                    <div class="p-5">
                        <h2 class="display-4">Nuestro objetivo</h2>
                        <p>Cumplir con lo pensado de que el cliente pueda encontrar su trabajo ideal y su oportunidad de aprovecharlo a lo máximo. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr class="border-2 border border-secondary">

    <div class="container mt-3 mb-5 pb-5" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
        <h1 class="text-center" id="preguntas">Preguntas Frecuentes</h1>

        <img class="mx-auto d-block img-fluid rounded-circle my-3 w-50" src="./assets/img/pagina-preguntas-frecuentes-o-FAQ.jpg" alt="">

        <div class="accordion accordion-flush mt-3 mb-5 border border-3 border-primary" id="accordionFlushExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        ¿Qué es TCAD?
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">TCAD es una AppWeb donde podras colgar tu curriculum y encontrar el trabajo deseado.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        ¿Cómo funciona TCAD?
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Solo tendras que registrarte, subir tu curriculum con los datos deseados y compartirlo.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        ¿Qué es un CV?
                    </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">El curriculum cumple con tres funciones: presentarte a tu futuro empleador, tus aspectos mas importantes de tu recorrido academico y laboral, como ultimo recordar a tu futuro empleador los datos que mejor hablan de ti. En este caso ocuparemos el formato KIWI</div>
                </div>
            </div>
        </div>
            <!-- seccion contacto -->
            <?php include('../includes/contacto.php') ?>
    </div>

    <!-- seccion preguntas frecuentes -->

    
    <!-- Modales -->
    <?php include('../includes/modals/modalRegister.php') ?>
    <?php include('../includes/modals/modalLogin.php') ?>
    <?php include('../includes/modals/modalmsj.php') ?>

    <?php include('../includes/footer.php') ?>