<?php 
    class metodos{
        public function mostrarDatos($sql)
        {
            $c=new conectar();
            $conexion=$c->conexion();

            $result=mysqli_query($conexion, $sql);

            return mysqli_fetch_all($result, MYSQLI_ASSOC);
        }

        public function insertarDatosNombres($datos)
        {
            $c = new conectar();
            $conexion=$c->conexion();
            $sql="INSERT INTO t_piezas (nombre_dispositivo, modelo, marca, color, capacidad, descripcion, fecha_agregado) 
                    VALUES ('$datos[0]', '$datos[1]', '$datos[2]', '$datos[3]', '$datos[4]', '$datos[5]', '$datos[6]')";
            return $result=mysqli_query($conexion, $sql);
        }

        public function actuaizarDatosNombres($datos){
            $c = new conectar();
            $conexion = $c->conexion();

            $sql = "UPDATE t_piezas 
                    SET nombre_dispositivo='$datos[0]', modelo='$datos[1]', marca='$datos[2]', color='$datos[3]', capacidad='$datos[4]', descripcion='$datos[5]', fecha_agregado='$datos[6]' 
                    WHERE id='$datos[7]'";
            
            return $result = mysqli_query($conexion, $sql);
        }

        public function eliminarDatosNombres($id){
            $c = new conectar();
            $conexion = $c->conexion();

            $sql = "DELETE FROM t_piezas WHERE id='$id'";
            return  $result = mysqli_query($conexion, $sql);
        }

        public function cancelarBoton()
        {
            return header("location: ../index.php");
        }
    }

?>