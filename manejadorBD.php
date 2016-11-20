<?php
$con=mysqli_connect("localhost","root","","flecha_amarilla");
$action=$_GET['action'];

switch($action){
    case "insert_service":
        mysqli_query($con,"INSERT INTO `servicios`(`empresa`, `domicilio`, `contacto`, `convenio`, `telefono`, `observaciones`, `paquetes`, `horario`, `hora_registro`, `fecha_registro`, `estatus`) VALUES ('{$_POST["empresa"]}','{$_POST["domicilio"]}','{$_POST["contacto"]}',{$_POST["convenio"]},'{$_POST["telefono"]}','{$_POST["observaciones"]}',{$_POST["paquetes"]},'{$_POST["horario"]}','{$_POST["hora_registro"]}','{$_POST["fecha_registro"]}','{$_POST["estatus"]}')");
        ?>
        <script>alert("Servicio registrado satisfactoriamente");
            window.location='index.php'
        </script>
        <?php
        break;
    case "update_service":
    $var=$_POST["identificador"];  ?>
    <script>
    console.log("<?php echo $var; ?>");
      </script><?php
        mysqli_query($con,"UPDATE `servicios` SET `paq_reales`={$_POST["paquetes_r"]}, `nombre_e`='{$_POST["nombre_e"]}', `estatus`='{$_POST["estatus"]}' WHERE `id`={$_POST["identificador"]}");
        ?>
        <script>alert("Servicio modificado satisfactoriamente");
          window.location='index.php'
          </script>
        <?php
        break;
        case "update_service2":
        $var=$_POST["identificador"];  ?>
        <script>
        console.log("<?php echo $var; ?>");
          </script><?php
            mysqli_query($con,"UPDATE `servicios` SET `ruta`='{$_POST["ruta"]}', `nombre`='{$_POST["nombre_o"]}', `estatus`='{$_POST["estatus"]}', `unidad`={$_POST["unidad"]}, `clave`={$_POST["clave_e"]} WHERE `id`={$_POST["identificador"]}");
            ?>
            <script>alert("Servicio modificado satisfactoriamente");
              window.location='index.php'
              </script>
            <?php
            break;


}

?>
