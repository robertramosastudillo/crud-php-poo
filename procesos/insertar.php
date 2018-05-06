<?php
//Incluimos la conexion y los metodos en los cuales vamos a trabajar
require_once "../connection.php";
require_once "../metodosCrud.php";

    //Declaramos los valores que el usuario ingresa en estas variables
    $nombre=$_POST['txtnombre'];
    $apellido=$_POST['txtapellido'];
    $telefono=$_POST['txttelefono'];
    $email=$_POST['txtemail'];

    //Guardamos las variables en un array
    $datos =array
        (
            $nombre,
            $apellido,
            $telefono,
            $email
        );
    //Creamos una instancia para poder llamar al metodo eliminar
    $obj= new metodos();
    if($obj->insertarDatos($datos) == 1)
    {
        header("location:../index.php");
    }
    else
        {
            echo "Fallo al agregar";
        }
?>