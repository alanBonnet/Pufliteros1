
<!-- Modal -->
<div class="modal fade" id="LoginModal" tabindex="-1" aria-labelledby="LoginModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="LoginModalLabel">Iniciar Sesión</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="../controllers/usuario/validateUser.php" method="post">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-md-9 mx-auto my-1">
                       <div class="form-floating">
                         <input type="text" name="nombre" id="" class="form-control mx-auto" min="8" placeholder="Usuario" required>
                         <label for="nombre"><i class="bi bi-person bg-dark p-1 rounded text-white"></i> Nombre de Usuario</label>
                       </div>
                    </div>
                    <div class="col-12 col-md-9 mx-auto my-1">
                        <div class="form-floating">
                            <input type="password" name="password" id="" min="8" class="form-control mx-auto" placeholder="pass" required>
                            <label for="password"><i class="bi bi-lock bg-dark p-1 rounded text-white"></i> Contraseña</label>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 mx-auto my-1">
                        <!-- <button type="submit" class="btn btn-primary p-2 mx-auto" id="registrarse" name="registro">Registrarse</button> -->
                        <input type="submit" value="Iniciar Sesión" class="btn btn-primary p-2 mx-auto" id="login" name="login">
                    </div>
                </div>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
