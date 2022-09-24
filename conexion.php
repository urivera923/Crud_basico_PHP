<?php 
    class conectar{
        private $servidor="localhost";
        private $usuario="root";
        private $bd="crudpoo";
        private $password="";

        public function conexion(){
            $conexion=mysqli_connect($this->servidor,
                                    $this->usuario,
                                    $this->password,
                                    $this->bd);
            return $conexion;
        }
    }
    $obj = new conectar();
    if ($obj->conexion()) {
        // echo 'Conectado con éxito';
    } else {
        echo "Fallo al conectar";
    }
?>