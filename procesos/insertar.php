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


    $datos = array(
        $nombre,
        $modelo,
        $marca,
        $color,
        $capacidad,
        $descripcion,
        $fecha
    );
    $obj = new metodos();
    if ($obj->insertarDatosNombres($datos) == 1) {
        header("location: ../index.php");
    } else {
        echo "Fallo al agregar";
    }
?>