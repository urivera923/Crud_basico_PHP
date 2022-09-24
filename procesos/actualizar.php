<?php

    require_once "../conexion.php";
    require_once "../metodosCrud.php";

    $nombre=$_POST['txtnombre'];
    $modelo=$_POST['txtmodelo'];
    $marca=$_POST['txtmarca'];
    $color=$_POST['txtcolor'];
    $capacidad=$_POST['txtcapacidad'];
    $descripcion=$_POST['txtdescripcion'];
    $fecha=$_POST['txtfecha'];
    $id=$_POST['id'];


    $datos = array(
        $nombre,
        $modelo,
        $marca,
        $color,
        $capacidad,
        $descripcion,
        $fecha,
        $id
    );
    $obj = new metodos();
    if ($obj->actuaizarDatosNombres($datos) == 1) {
        header("location: ../index.php");
    } else {
        echo "Fallo al actualizar";
    }

?>