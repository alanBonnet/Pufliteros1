<?php include('./header.php');session_start()?>
<?php include('./navbar.php')?>
<div class="container mt-5 pt-5" style="min-height:calc(100vh - 100px);">
    <div class="row">
        <div class="col-12"><?php echo $_SESSION['curriculum']['nombre_y_apellido'] ?></div>
        <div class="col-12"><?php echo $_SESSION['curriculum']['trabajo_interes'] ?></div>
        <div class="col-12"><?php echo $_SESSION['curriculum']['email_curriculum'] ?></div>
        <div class="col-12"><?php echo $_SESSION['curriculum']['nro_telefono'] ?></div>
        <div class="col-12"><?php echo $_SESSION['curriculum']['experiencia'] ?></div>
        <div class="col-12"><?php echo $_SESSION['curriculum']['intereses'] ?></div>
        <div class="col-12"><?php echo $_SESSION['curriculum']['educacion_calificacion'] ?></div>
        <div class="col-12"><?php echo $_SESSION['curriculum']['habilidades'] ?></div>

    </div>
</div>
<?php include('./footer.php')?>