<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud en php ymysql</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/da12b8fb97.js" crossorigin="anonymous"></script>
</head>
<body>
    <script>
        function eliminar(){
            var respuesta=confirm("¿Estas seguro que deseas eliminar?");
            return respuesta
        }
    </script>

    <h1 class="text-center p-3" >RESERVA</h1> 
    <?php
     include "modelo/conexion.php";
    include "controlador/eliminar_persona.php";
    ?>
    <div class="container-fluid row">
        <form class="col-4 p-3" method="POST">
            <h3 class="text-center text-secondary"> Registro de reserva</h3>
            <?php
           
            include "controlador/registro_persona.php";
            ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre de la persona</label>
                <input type="text" class="form-control" name="nombre">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Apellido de la persona</label>
                <input type="text" class="form-control" name="apellido">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">DNI de la persona</label>
                <input type="text" class="form-control" name="dni">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Fecha de nacimiento</label>
                <input type="date" class="form-control" name="fecha">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Correo</label>
                <input type="text" class="form-control" name="correo">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Celular</label>
                <input type="text" class="form-control" name="celular">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Fecha de entrada</label>
                <input type="date" class="form-control" name="fecha_entra">
            </div>
             <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Fecha de salida</label>
                <input type="date" class="form-control" name="fecha_sali">
            </div>
            <div class="mb-3">
                <label for="alternativas" class="form-label">Tipo de habitación</label>
                <select type="text" class="form-control" name="habitacion" >
                    <option value="">Seleccione la habitación</option>
                    <option value="Habitación Matrimonial">Habitación Matrimonial</option>
                    <option value="Habitación Individual">Habitación Individual</option>
                    <option value="Habitación Doble">Habitación Doble</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Numero de Personas</label>
                <input type="text" class="form-control" name="cantidad">
            </div>
            <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
        </form>
        <div class="col-8 p-4">
            <table class="table">
                <thead class="bg-info">
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOMBRES</th>
                    <th scope="col">APELLIDOS</th>
                    <th scope="col">DNI</th>
                    <th scope="col">F.NAC</th>
                    <th scope="col">CORREO</th>
                    <th scope="col">CELULAR</th>
                    <th scope="col">F.ENTRADA</th>
                    <th scope="col">F.SALIDA</th>
                    <th scope="col">HABITACION</th>
                    <th scope="col">CANTIDAD</th>
                    <th scope="col"></th>
                  
                    </tr>
                </thead>
                <tbody>
                  

                    <?php
                    include "modelo/conexion.php";
                    $sql = $conexion->query("SELECT * FROM persona");
                    while($datos = $sql->fetch_object()) { ?>
                    
                    <tr>
                        <td><?= $datos->id_persona?></td>
                        <td><?= $datos->nombre?></td>
                        <td><?= $datos->apellido?></td>
                        <td><?= $datos->dni?></td>
                        <td><?= $datos->fecha_nac?></td>
                        <td><?= $datos->correo?></td>
                        <td><?= $datos->celular?></td>
                        <td><?= $datos->fecha_entra?></td>
                        <td><?= $datos->fecha_sali?></td>
                        <td><?= $datos->habitacion?></td>
                        <td><?= $datos->cantidad?></td>
                        <td> 
                        <a href="modificar_persona.php?id=<?= $datos->id_persona ?> " class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a  onclick="return eliminar()" href="index.php?id=<?=$datos->id_persona ?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                    <?php }
                    ?>

                </tbody>
            </table>
        </div>
    </div>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>