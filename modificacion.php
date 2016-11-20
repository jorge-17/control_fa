<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style/material.amber-deep_orange.min.css" />
    <link rel="stylesheet" href="estilos.css" media="screen" title="no title">
    <title>Modificar el servicio</title>
  </head>
  <body>
    <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
          <!-- Title -->
          <img src="style/1394566234-flecha.jpg" class="logo_fa">
          <!-- Add spacer, to align navigation to the right -->
          <div class="mdl-layout-spacer"></div>
          <!-- Navigation. We hide it in small screens. -->
          <nav class="mdl-navigation mdl-layout--large-screen-only">
            <div><?php  $time = time(); echo date("d-m-Y (H:i:s)", $time); ?></div>
            <a class="mdl-navigation__link" href="index.php">Home</a>
            <a class="mdl-navigation__link" href="operaciones.php">Servicios pendientes</a>
            <a class="mdl-navigation__link" href="servicios_proceso.php">Servicios en proceso</a>
            <a href="servicios_completos.php" class="mdl-navigation__link">Servicios completados</a>
            <a href="exportar.php" class="mdl-navigation__link">Exportar</a>
          </nav>
        </div>

    </header><br><br><center>
    <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">


    <?php
    $con=mysqli_connect("localhost","root","","flecha_amarilla");

    $action=$_GET['action'];

    if($action="update_service"){
        $result=mysqli_query($con,"SELECT * FROM `servicios` WHERE id = {$_POST["id"]}");
        while($row=mysqli_fetch_array($result)){
            ?>
            <tr>
                <td>No. de servicio: <?php echo $row["id"]; ?></td>
                <td>Ruta: <?php echo $row["ruta"]; ?></td>
            </tr>
            <tr>
              <td>Empresa: <?php echo $row["empresa"]; ?></td>
              <td>Domicilio: <?php echo $row["domicilio"]; ?></td>
            </tr>
            <tr>
              <td>Contacto: <?php echo $row["contacto"]; ?></td>
              <td>Convenio: <?php echo $row["convenio"]; ?></td>
            </tr>
            <tr>
              <td>Telefono: <?php echo $row["telefono"]; ?></td>
              <td>Observaciones: <?php echo $row["observaciones"]; ?></td>
            </tr>
            <tr>
              <td>No. paquetes: <?php echo $row["paquetes"]; ?></td>
              <td>Horario: <?php echo $row["horario"]; ?></td>
            </tr>
            <tr>
              <td>Hora de registro: <?php echo $row["hora_registro"]; ?></td>
                <td>Fecha de registro: <?php echo $row["fecha_registro"]; ?></td>
            </tr>
            <tr>
              <form action="manejadorBD.php?action=update_service" method="post">
                <td>
                  <div class="mdl-textfield mdl-js-textfield">
                      <input class="mdl-textfield__input" type="number" id="paquetes_r" name="paquetes_r">
                      <label class="mdl-textfield__label" for="paquetes_r">Paquetes reales</label>
                  </div>
                </td>
                <td>
                  <input type="hidden" name="identificador" value="<?php echo $row["id"]; ?>">
                  <div class="mdl-textfield mdl-js-textfield">
                      <input class="mdl-textfield__input" type="text" id="nombre_e" name="nombre_e">
                      <label class="mdl-textfield__label" for="nombre_e">Nombre de quien entrego</label>
                  </div>
                </td>
                </tr>

                <tr>
                  <td>

                  </td>
                  <td>
                    <input type="hidden" name="estatus" value="registrado">
                    <center><button type="submit" class="mdl-button mdl-button--raised mdl-js-button mdl-button--colored">
                    Modificar
                  </button></center>
                </td>
                </tr>
              </form>
            <?php
    }   } ?>
</table></center>
  </body>
  <script type="text/javascript" src="style/mdl/material.js"></script>
</html>
