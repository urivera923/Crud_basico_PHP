<?php 
    require_once 'conexion.php';
    require_once 'metodosCrud.php';
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>
        Inicio
    </title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col">

                <div class="card my-5 mx-5 shadow border">
                    <div class="card-header text-white bg-dark">
                        <div class="text-center fw-bold">Formulario</div>
                    </div>
                    <div class="card-body">
                        <form action="procesos/insertar.php" method="post">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" name="txtnombre" placeholder="Nombre del dispositivo">
                                <label for="floatingInput">Nombre del dispositivo</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingPassword" name="txtmodelo" placeholder="Modelo">
                                <label for="floatingPassword">Modelo</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingPassword" name="txtmarca" placeholder="Modelo">
                                <label for="floatingPassword">Marca</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingPassword" name="txtcolor" placeholder="Color">
                                <label for="floatingPassword">Color</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingPassword" name="txtcapacidad" placeholder="Capacidad">
                                <label for="floatingPassword">Capacidad</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingPassword" name="txtdescripcion" placeholder="Descripción">
                                <label for="floatingPassword">Descripción</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="date" class="form-control" id="floatingPassword" name="txtfecha" placeholder="Fecha de agregado">
                                <label for="floatingPassword">Fecha de agregado</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </form>
                    </div>
                </div>
                

                <div class="card border shadow mb-5 mx-5">
                    <div class="card-header text-white bg-dark text-center">
                        <div class=" fw-bold">Información</div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">

                        <table class="table table-hover">
                            <thead>
                                <tr class="text-center">
                                <th scope="col">ID</th>
                                <th scope="col">Nombre del dispositivo</th>
                                <th scope="col">Modelo</th>
                                <th scope="col">Marca</th>
                                <th scope="col">Color</th>
                                <th scope="col">Capacidad</th>
                                <th scope="col">Descripcion</th>
                                <th scope="col">Fecha de agregado</th>
                                <th scope="col">Editar</th>
                                <th scope="col">Eliminar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $obj= new metodos();
                                    $sql="SELECT id, nombre_dispositivo, modelo, marca, color, capacidad, descripcion, fecha_agregado from t_piezas";
                                    $datos=$obj->mostrarDatos($sql);

                                    foreach ($datos as $key) {
                                        # code...
                                    
                                ?>
                                <tr class="text-center">
                                    
                                    <td><?php echo $key['id']; ?></td>
                                    <td><?php echo $key['nombre_dispositivo']; ?></td>
                                    <td><?php echo $key['modelo']; ?></td>
                                    <td><?php echo $key['marca']; ?></td>
                                    <td><?php echo $key['color']; ?></td>
                                    <td><?php echo $key['capacidad']; ?></td>
                                    <td><?php echo $key['descripcion']; ?></td>
                                    <td><?php echo $key['fecha_agregado']; ?></td>
                                    <td><span class="btn btn-warning text-white"><a class="text-white"  href="editar.php?id=<?php echo $key['id']; ?>"><i class="fa-solid fa-pen-to-square mx-2"></i>Editar</a></span></td>
                                    <td><span class="btn btn-danger text-white"><a class="text-white"  href="procesos/eliminar.php?id=<?php echo $key['id']; ?>"><i class="fa-solid fa-trash-can mx-2"></i>Eliminar</a></span></td>

                                </tr>
        
                                <?php 
                                    }
                                ?>
                            </tbody>
                        </table>

                        </div>
                        
                    </div>
                </div>

            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>