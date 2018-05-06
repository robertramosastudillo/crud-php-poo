<?php
//Incluimos la conexion y los metodos en los cuales vamos a trabajar
require_once "../connection.php";
require_once "../metodosCrud.php";

//Declaramos los valores que el usuario ingresa en estas variables
    $nombre=$_POST['txtnombre'];
    $apellido=$_POST['txtapellido'];
    $telefono=$_POST['txttelefono'];
    $email=$_POST['txtemail'];
    $id=$_POST['id'];

//Guardamos las variables en un array
    $datos =array
        (
            $nombre,
            $apellido,
            $telefono,
            $email,
            $id
        );
    //Creamos una instancia para poder llamar al metodo actualizar   
    $obj= new metodos();
    if($obj->actualizarDatos($datos) == 1)
    {
        header("location:../index.php");
    }
    else
        {
            echo "Fallo al actualizar";
        }
?>