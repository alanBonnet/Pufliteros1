<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top animate__animated animate__backInRight">
        <div class="container px-5 animate__animated animate__backInRight">
            <a class="navbar-brand" href="/pufliteros1/php/index.php">TCAD</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#inicio">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#preguntas">Preguntas Frecuentes</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contacto" onclick="mostrarContacto()">Contáctanos</a></li>
                    <?php
                    
                    if (isset($_SESSION['usuario'])) {
                    ?>

                        <li class="nav-item"><a href="/pufliteros1/includes/formCurriculum.php" class="nav-link text-success rounded-pill bg-opacity-25"> <i class="bi bi-people "></i> <?php echo $_SESSION['usuario'] ?></a></li>
                        <li class="nav-item"><a href="../controllers/usuario/logout.php" class="nav-link"> Cerrar Sesión</a></li>
                    <?php
                    } else {
                    ?>
                        <li class="nav-item"><a class="nav-link" href="#!" data-bs-toggle="modal" data-bs-target="#LoginModal">Iniciar Sesión</a></li>
                        <li class="nav-item">
                            <a class="nav-link" href="#!" data-bs-toggle="modal" data-bs-target="#RegistrarseModal">Registrarse</a>
                            <!-- fijate en el archivo que está en 
                                    Puflitero1/includes/modals/modalRegister.php
                                    para cambiar la vista del modal -->
                        </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>