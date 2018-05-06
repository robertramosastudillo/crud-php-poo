<?php
    //Creamos una clase llamado conexion
    class conectar
    {
        private $servidor="localhost";
        private $usuario="root";
        private $bd="crudpoo";
        private $password="";

        public function connection()
        {
            $connection=mysqli_connect( $this->servidor,
                                        $this->usuario,
                                        $this->password,
                                        $this->bd);
                return $connection;
        }
    }
    
//Probamos la Conexion
/*
    $obj= new conectar();
    if($obj->connection())
        {
            echo"Conectado con exito";
        }
        else
            {
                echo"Fallo conectar";
            }
*/           
?>