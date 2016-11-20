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
      <tr>
        <th colspan="2">
          Detalles del servicio
        </th>
      </tr>


    <?php
    
    $con=mysqli_connect("localhost","root","","flecha_amarilla");



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
              <td>
                Paquetes reales: <?php echo $row["paq_reales"]; ?>
              </td>
              <td>
                Nombre de quien entrego: <?php echo $row["nombre_e"]; ?>
              </td>
            </tr>
            <tr>
              <td>
                Unidad: <?php echo $row["unidad"]; ?>
              </td>
              <td>
                Nombre del operador: <?php echo $row["nombre"]; ?>
              </td>
            </tr>
            <tr>
              <td colspan="2">
                <a class="mdl-button mdl-js-button mdl-button--accent" href="servicios_completos.php">REGRESAR</a>
              </td>
            </tr>
            <?php
        }
    }


    ?>
</table></center>
  </body>
  <script type="text/javascript" src="style/mdl/material.js"></script>
</html>
