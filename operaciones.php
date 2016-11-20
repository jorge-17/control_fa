<html>
    <head>
        <title>Operaciones</title>
        <link type="text/css" rel="stylesheet" href="style/mdl/material.css">
        <link type="text/css" rel="stylesheet" href="estilos.css">
        <link rel="stylesheet" href="style/material.amber-deep_orange.min.css" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
                <a class="mdl-navigation__link" href="index.php">Home</a>
                <a class="mdl-navigation__link" href="operaciones.php">Servicios pendientes</a>
                <a class="mdl-navigation__link" href="servicios_proceso.php">Servicios en proceso</a>
                <a href="servicios_completos.php" class="mdl-navigation__link">Servicios completados</a>
                <a href="exportar.php" class="mdl-navigation__link">Exportar</a>
              </nav>
            </div>
        </header>
    </body><br><br>
    <center>
        <div class="mostrar">
          <table style="width:100%" id="carro" class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
              <thead>
                  <tr>
                      <th>No. servicio</td>
                      <th>Empresa</td>
                      <th>Domicilio</td>
                      <th>Contacto</td>
                      <th>Convenio</td>
                      <th>Telefono</td>
                      <th>Observaciones</td>
                      <th>Paquetes</td>
                      <th>Horario</td>
                      <th>Hora y<br> Fecha de registro</td>
                      <td></td>
                  </tr>
              </thead>
              <tbody>
                  <?php
                  $con=mysqli_connect("localhost","root","","flecha_amarilla");
                  $result=mysqli_query($con,"SELECT * FROM `servicios` WHERE id > 1 AND estatus='pendiente'");
                  while($row=mysqli_fetch_array($result)){
                      ?>
                      <tr>
                          <td><?php echo $row["id"]; ?></td>
                          <td><?php echo $row["empresa"]; ?></td>
                          <td><?php echo $row["domicilio"]; ?></td>
                          <td><?php echo $row["contacto"]; ?></td>
                          <td><?php echo $row["convenio"]; ?></td>
                          <td><?php echo $row["telefono"]; ?></td>
                          <td><?php echo $row["observaciones"]; ?></td>
                          <td><?php echo $row["paquetes"]; ?></td>
                          <td><?php echo $row["horario"]; ?></td>
                          <td><?php echo $row["hora_registro"]; ?><br><?php echo $row["fecha_registro"]; ?></td>
                          <td><form action="modificacion2.php?action=update_service" method="post">
                            <input type="hidden" value="<?php echo $row["id"];?>" name="id">
                            <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored">
                              <i class="material-icons">mode_edit</i>
                            </button>
                          </form></td>
                      </tr>
                      <?php
                  }
                  ?>
              </tbody>
          </table>
        </div>
    </center>
    <script type="text/javascript" src="style/mdl/material.js"></script>
</html>
