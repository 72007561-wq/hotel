<?php
if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["dni"]) and !empty($_POST["fecha"]) and !empty($_POST["correo"])and !empty($_POST["celular"])and !empty($_POST["fecha_entra"])and !empty($_POST["fecha_sali"])and !empty($_POST["habitacion"])and !empty($_POST["cantidad"]) ) {
        echo "TODO OK";
        
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $dni=$_POST["dni"];
        $fecha=$_POST["fecha"];
        $correo=$_POST["correo"];
        $celular=$_POST["celular"];
        $fecha_entra=$_POST["fecha_entra"];
        $fecha_sali=$_POST["fecha_sali"];
        $habitacion=$_POST["habitacion"];
        $cantidad=$_POST["cantidad"];

        $sql=$conexion->query("insert into persona(nombre,apellido,fecha_nac,correo,dni,celular,fecha_entra,fecha_sali,habitacion,cantidad)values('$nombre','$apellido','$fecha','$correo','$dni','$celular','$fecha_entra','$fecha_sali','$habitacion','$cantidad')");
        if ($sql==1) {
            echo '<div class="alert alert-success" >Persona registrado correctamente</div>';
        } 
        else {
            echo '<div class="alert alert-danger" >Error al registar persona</div>';
        }

         }else {
            echo '<div class="alert alert-warnig" >Algunos de los campos esta vacio</div>';
         }
}
?>