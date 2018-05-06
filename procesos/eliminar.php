<?php
    //mandamos otravez de GET el id para poder hacer la eliminacion
    $id=$_GET['id'];
    //Incluimos la conexion y los metodos en los cuales vamos a trabajar
    require_once "../connection.php";
    require_once "../metodosCrud.php";

    //Creamos una instancia para poder llamar al metodo eliminar
    $obj= new metodos();
    if($obj->eliminarDatos($id) == 1)
    {
        header("location:../index.php");
    }
    else
        {
            echo "Fallo al eliminar";
        }
?>