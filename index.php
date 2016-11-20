<html>
    <head>
        <title>Home</title>
        <link type="text/css" rel="stylesheet" href="style/mdl/material.css">
        <link type="text/css" rel="stylesheet" href="estilos.css">
        <link rel="stylesheet" href="style/material.amber-deep_orange.min.css" />
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

      </header>
      <center><br><br>
      <form id="formulario" action="manejadorBD.php?action=insert_service" method="post" onsubmit="verifica()">
      <table class="mdl-data-table mdl-js-data-table">
         <thead>
             <tr>
                <td>

                 </td>
                 <td colspan="2">Ingresa los datos del servicio</td>
             </tr>
         </thead>
         <tbody>
            <tr>
            <td>
              <div class="mdl-textfield mdl-js-textfield">
                  <input class="mdl-textfield__input" name="empresa" type="text" id="empresa">
                  <label class="mdl-textfield__label">Agencia o Empresa</label>
              </div>
            </td>

              <td>
                <div class="mdl-textfield mdl-js-textfield">
                    <input class="mdl-textfield__input" name="domicilio" type="text" id="domicilio">
                    <label class="mdl-textfield__label" for="domicilio">Domicilio</label>
                </div>
              </td>
              <td>
                <div class="mdl-textfield mdl-js-textfield">
                    <input class="mdl-textfield__input" type="text" name="contacto" id="contacto">
                    <label class="mdl-textfield__label" for="contacto">Contacto</label>
                </div>
              </td>
          </tr>
          <tr>
              <td>
                <div class="mdl-textfield mdl-js-textfield">
                    <input class="mdl-textfield__input" type="number" id="convenio" name="convenio">
                    <label class="mdl-textfield__label" for="convenio">Convenio</label>
                </div>
              </td>
              <td>
                <div class="mdl-textfield mdl-js-textfield">
                    <input class="mdl-textfield__input" type="text" id="telefono" name="telefono">
                    <label class="mdl-textfield__label" for="telefono">Telefono</label>
                </div>
              </td>
              <td>
                <div class="mdl-textfield mdl-js-textfield">
                    <textarea class="mdl-textfield__input" rows="2" id="observaciones" name="observaciones"></textarea>
                    <label class="mdl-textfield__label" for="observaciones">Observaciones</label>

                </div>
              </td>
              </tr>
          <tr>
              <td>
                <div class="mdl-textfield mdl-js-textfield">
                    <input class="mdl-textfield__input" type="number" id="paquetes" name="paquetes">
                    <label class="mdl-textfield__label" for="paquetes">Paquetes</label>
                </div>
              </td>
              <td>
                <div class="mdl-textfield mdl-js-textfield">
                    <input class="mdl-textfield__input" type="text" id="horario" name="horario">
                    <label class="mdl-textfield__label" for="horario">Horario</label>
                </div>
              </td>
              <td>

              </td>
             </tr>
             <input name="hora_registro" type="hidden" value="<?php echo date("H:i:s", $time); ?>">
             <input name="fecha_registro" type="hidden" value="<?php echo date("Y-m-d", $time); ?>">
             <input type="hidden" name="estatus" value="pendiente">
             <tr>
              <td><center>
                <table>
                    <tr>
                        <td>
                            <!-- Colored FAB button -->
                             <button type="submit" class="mdl-button mdl-button--raised mdl-js-button mdl-button--colored">
                               Registrar
                             </button>
                        </td>
                        <td>
                            <!-- Colored FAB button -->
                             <button type="reset" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
                               Limpiar
                             </button>
                        </td>
                    </tr>
                </table>
            </center>  </td>
          </tr>
         </tbody>
      </table>
      </form>
      </center>
  </body>
  <script type="text/javascript" src="style/mdl/material.js"></script>
</html>
