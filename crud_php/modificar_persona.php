<?php
include "modelo/conexion.php";

$id=$_GET["id"];

$sql=$conexion->query("select * from persona where id_persona=$id");

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
            <form class="col-4 p-3 m-auto" method="POST">
                <h3 class="text-center text-secondary"> modificar personas</h3>
                <input type="hidden" name="id" value="<?= $_GET["id"]?>">
                <?php
                include "controlador/modificar_persona.php";
                while($datos=$sql->fetch_object()) {?>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nombre de la persona</label>
                        <input type="text" class="form-control" name="nombre" value="<?= $datos->nombre ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Apellido de la persona</label>
                        <input type="text" class="form-control" name="apellido" value="<?= $datos->apellido ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">DNI de la persona</label>
                        <input type="text" class="form-control" name="dni" value="<?= $datos->dni ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Fecha de nacimiento</label>
                        <input type="date" class="form-control" name="fecha" value="<?= $datos->fecha ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Correo</label>
                        <input type="text" class="form-control" name="correo" value="<?= $datos->correo ?>">
                    </div> 
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Celular</label>
                        <input type="text" class="form-control" name="celular" value="<?= $datos->celular ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Fecha de entrada</label>
                        <input type="date" class="form-control" name="fecha_entra" value="<?= $datos->fecha_entra ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Fecha de salida</label>
                        <input type="date" class="form-control" name="fecha_sali" value="<?= $datos->fecha_sali ?>">
                    </div>
                    <div class="mb-3">
                        <label for="alternativas" class="form-label">Tipo de habitación</label>
                        <select type="text" class="form-control" name="habitacion" value="<?= $datos->habitacion ?>">
                            <option value="">Seleccione la habitación</option>
                            <option value="opcion1">Habitación Matrimonial</option>
                            <option value="opcion2">Habitación Individual</option>
                            <option value="opcion3">Habitación Doble</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Numero de Personas</label>
                        <input type="text" class="form-control" name="cantidad" value="<?= $datos->cantidad ?>">
                    </div>

                <?php }

                ?>
                

                <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">modificar</button>
            </form>
    </body>
</html>