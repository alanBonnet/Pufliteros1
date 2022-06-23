<?php include("../core/db.php")/*Acá conecto a la base de datos*/?>
<?php include("../includes/header.php")/*Acá llamo al <head></head> con un navbar del header.php*/?>

<?php 
  $quieroTareas=false;
  if($quieroTareas){    
    include('./tareabody.php');
  }else{
    include("./inicio.php")/*acá puede entrar el contenido de la página*/;
  }
?>
  
<?php include("../includes/footer.php")/*acá entra el final del codigo y los scripts(js)*/?>
