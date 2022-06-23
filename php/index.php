<?php include("../core/db.php")/*Acá conecto a la base de datos*/?>


<?php 
  $quieroTareas=false;
  $quieroverModeloLauta=true;
  if($quieroTareas){    
    include("../includes/header.php")/*Acá llamo al <head></head> con un navbar del header.php*/;
    include('./tareabody.php');
    include("../includes/footer.php")/*acá entra el final del codigo y los scripts(js)*/;
  }else if($quieroverModeloLauta){
    // include('../includes/header.php');
    require('../NewModel/index.php');
    // include('../includes/footer.php');
  }
  else{
    include("../includes/header.php")/*Acá llamo al <head></head> con un navbar del header.php*/;
    include("./inicio.php")/*acá puede entrar el contenido de la página*/;
    include("../includes/footer.php")/*acá entra el final del codigo y los scripts(js)*/;
  }
?>
  
<?php ?>
