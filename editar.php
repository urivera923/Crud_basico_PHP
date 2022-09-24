<?php 
    require_once 'conexion.php';
    $obj = new conectar();
    $conexion = $obj->conexion();
    $id = $_GET['id'];
    $sql = "SELECT nombre_dispositivo, modelo, marca, color, capacidad, descripcion, fecha_agregado 
            FROM t_piezas WHERE id='$id'";
    $result = mysqli_query($conexion, $sql);
    $ver = mysqli_fetch_row($result);
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
        Editar
    </title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col">

                <div class="card my-5 mx-5 shadow border">
                    <div class="card-header text-white bg-dark">
                        <div class="text-center fw-bold">Actualizar Datos Incorrectos</div>
                    </div>
                    <div class="card-body">
                        <form action="procesos/actualizar.php" method="post">
                            <input type="text" hidden="" value="<?php echo $id ?>" name="id">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" name="txtnombre" placeholder="Nombre del dispositivo"  value="<?php echo $ver[0]; ?>">
                                <label for="floatingInput">Nombre del dispositivo</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingPassword" name="txtmodelo" placeholder="Modelo" value="<?php echo $ver[1]; ?>">
                                <label for="floatingPassword">Modelo</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingPassword" name="txtmarca" placeholder="Modelo" value="<?php echo $ver[2]; ?>">
                                <label for="floatingPassword">Marca</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingPassword" name="txtcolor" placeholder="Color" value="<?php echo $ver[3]; ?>">
                                <label for="floatingPassword">Color</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingPassword" name="txtcapacidad" placeholder="Capacidad" value="<?php echo $ver[4]; ?>">
                                <label for="floatingPassword">Capacidad</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingPassword" name="txtdescripcion" placeholder="Descripción" value="<?php echo $ver[5]; ?>">
                                <label for="floatingPassword">Descripción</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="date" class="form-control" id="floatingPassword" name="txtfecha" placeholder="Fecha de agregado" value="<?php echo $ver[6]; ?>">
                                <label for="floatingPassword">Fecha de agregado</label>
                            </div>
                            <button type="submit" class="btn btn-warning"><i class="fa-solid fa-pen-to-square mx-2"></i>Corregir</button>
                        </form>
                        <button class="btn btn-danger mt-4 mb-2" onclick="window.location.href='index.php'"><i class="fa-solid fa-ban mx-2"></i>Cancelar</button>
                    </div>
                </div>
                

            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>