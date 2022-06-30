<div class="container my-3 animate__animated animate__bounceIn" id="contacto" hidden>
    <form class="bg-dark text-white p-5 rounded-lg border-3 border border-warning" action="../controllers/contacto/saveContacto.php" method="post">
        <label class="form-label fs-3" for="">Nombre</label>
        <input class="form-control border-3 border-secondary" type="text" name="nombre_contacto" >
        <label class="form-label fs-3" for="">Dinos qué piensas</label>
        <textarea id="" cols="30" rows="10" class="form-control border-3 border-secondary" name="opinion_contacto"></textarea>
        <input type="submit" value="Enviar" class="btn btn-primary p-3 mt-2 rounded-pill fs-5" name="contactUs" id="contactBtn">
    </form>
</div>
