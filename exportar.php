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
          </nav>
        </div>

    </header><br><br><center>
    <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
      <tr>
        <td>Exportar datos por Unidad en archivo Excel</td>
      </tr>
      <form action="php_excel.php" method="post">
    <?php
    $con=mysqli_connect("localhost","root","","flecha_amarilla");
    ?><tr>
      <td><center>
                      <label for="unidad">Unidad</label>
                      <select class="form-control" name="unidad" id="unidad">
                        <?php

                        $result=mysqli_query($con,"SELECT unidad FROM `unidades`");
                        while($row=mysqli_fetch_array($result)){
                            ?>
                        <option><?php echo $row["unidad"]; ?></option>
                        <?php
                        }
                        ?>
                      </select></center>
                    </td>
                  </tr>
                  <tr>
                    <td>

                    <center><button type="submit" class="mdl-button mdl-button--raised mdl-js-button mdl-button--colored">
                    Exportar
                  </button></center>
                </td>
                </tr>
              </form>


            </tr>
            <?php




    ?>
</table></center>
  </body>
  <script type="text/javascript" src="style/mdl/material.js"></script>
</html>
