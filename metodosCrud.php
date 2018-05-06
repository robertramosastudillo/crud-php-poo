<?php
//creamos una clase llamada metodos donde guardamos todas las funciones que vamos a elaborar
    class metodos
    {
        //Metodo para mostrar los datos en la tabla
        public function mostrarDatos($sql)
        {
            $c= new conectar();
            $connection=$c->connection();

            $result=mysqli_query($connection,$sql);

            return mysqli_fetch_all($result,MYSQLI_ASSOC);
        }
        //Metodo para insertar datos
        public function insertarDatos($datos)
            {
                $c= new conectar();
                $connection=$c->connection();

                $sql="INSERT INTO persona (nombre,apellido,telefono,email)VALUES('$datos[0]','$datos[1]','$datos[2]','$datos[3]')";

                return $result=mysqli_query($connection,$sql);
            }
        //Metodo para actualizar
        public function actualizarDatos($datos)
            {
                $c= new conectar();
                $connection=$c->connection();

                $sql="UPDATE persona SET    nombre='$datos[0]',
                                            apellido='$datos[1]',
                                            telefono='$datos[2]',
                                            email='$datos[3]'
                                        WHERE id='$datos[4]'";
                                            
                return $result=mysqli_query($connection,$sql);
            }
        //Metodo para eliminar
        public function eliminarDatos($id)
            {
                $c= new conectar();
                $connection=$c->connection();

                $sql = "DELETE FROM persona WHERE id='$id'";

                return $result=mysqli_query($connection,$sql);
            }    
    }
?>