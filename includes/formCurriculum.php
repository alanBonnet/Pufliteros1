<?php include('./header.php') ?>
<?php
    session_start();
    if($_SESSION['vCV'] == true){
        
        header('Location: ./showCurriculum.php');
    }else{
        ?>
        
            <body class="pagcurriculum pt-4 pb-5">
                <?php include('./navbar.php')?>
                <div class="container  mt-5 mb-5 pb-5">
                    <div class="row  border border-dark border-2 rounded p-3 mt-5 mb-5">
                        <div class="col-12 col-md-6 col-lg-4 border-start border-end  border-dark border-1 mx-auto">
                            <form action="../controllers/curriculum/curriSave.php" method="post">
                                <div class="mb-3 text-center">
                                    <label for="nombreapellidos" class="form-label">Ingrese su Nombre y Apellido.</label>
                                    <input type="text" class="form-control" id="nombreapellido" name="nombreapellido" required >
                                </div>
                                <div class="mb-3 text-center">
                                    <label for="curriculumtrabajo" class="form-label">¿Qué trabajo busca?</label>
                                    <input type="text" class="form-control" id="job" name="jobusca" required >
                                </div>

                                </div>

                                <hr class="border border-1 border-dark my-3">

                                <div class="container  border-start border-end    border-dark border-1 p-3 my-3 ">
                                    <div class="row">
                                        <div class="col-12 col-md-6 col-lg-4  mx-auto">

                                            <div class="mb-3 text-center">
                                                <label for="emailcurriculumm" class="form-label">Ingrese su correo electrónico.</label>
                                                <input type="email" class="form-control" id="emailcurriculum" name="emailcurriculum"  required >
                                            </div>
                                            <div class="mb-3 text-center">
                                                <label for="numerotelefono" class="form-label">Ingrese su número de teléfono.</label>
                                                <input type="tel" class="form-control" id="nrotelefono" name="nrotelefono" required >
                                            </div>

                                        </div>
                                        <div class="col-12 col-md-6 col-lg-4 mx-auto">
                                                <div class="mb-3 text-center">
                                                    <label for="nombreapellidos" class="form-label">Cuentanos tu experiencia.</label>
                                                    <input type="text" class="form-control" id="experience" name="experience">
                                                </div>
                                                <div class="mb-3 text-center">
                                                    <label for="curriculumtrabajo" class="form-label">Intereses personales</label>
                                                    <input type="text" class="form-control" id="intereses" name="intereses" >
                                                </div>

                                        </div>
                                        <hr class="border   border-1 border-dark">

                                        <div class="col-12 col-md-6 col-lg-4 mx-auto">
                                                <div class="mb-3 text-center">
                                                    <label for="eduycalif" class="form-label">Educación y calificación.</label>
                                                    <input type="text" class="form-control" id="eduycali" name="eduycali" required >
                                                </div>
                                            

                                            <hr class="border  border-1 border-dark border-1 border-dark">

                                            <div class="mb-3 text-center">
                                                <label for="habilidaddes" class="form-label">Dinos algunas de tus habilidades.</label>
                                                <input type="text" class="form-control" id="habilidades" name="skills" required >
                                            </div>
                                            <hr class="border  border-1 border-dark">

                                            <div class="d-grid gap-2 d-block ">
                                                
                                                <input type="submit" name="newCv" value="Enviar" class="btn btn-primary">
                                            </div>
                            
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        <?php
    }


?>
    
<?php include('./footer.php') ?>