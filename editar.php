<?php
    //Incluimos la conexion
    require_once "connection.php";
    //Creamos una instancia de la clase conectar
    $obj= new conectar();
    $connection=$obj->connection();
    //mandamos atravez de GET el id para poder hacer la actualizacion
    $id=$_GET['id'];
    $sql="SELECT nombre,apellido,telefono,email
                FROM persona WHERE id='$id'";
    $result=mysqli_query($connection,$sql);
    $ver=mysqli_fetch_row($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Crud</title>
    <script src="js/jquery-3.3.1.min.js"></script>

    <!--Validar-->
    <script>

var expr = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;

            $(document).ready(function()
                {
                    $("#bEnviar").click(function()
                        {
                            var nombre = $("#itnombre").val();
                            var apellido = $("#itapellido").val();
                            var telefono = $("#ittelefono").val();
                            var email = $("#itemail").val();

                            if(nombre == "")
                                {
                                    $("#mensaje1").fadeIn();
                                    return false;
                                }
                                else
                                    {
                                        $("#mensaje1").fadeOut();
                                        if(apellido == "")
                                            {
                                                $("#mensaje2").fadeIn();
                                                return false;
                                            }
                                            else
                                                {
                                                    $("#mensaje2").fadeOut();
                                                    if(telefono == "")
                                                        {
                                                            $("#mensaje3").fadeIn();
                                                            return false;
                                                        }
                                                        else
                                                            {
                                                                $("#mensaje3").fadeOut();
                                                                if(email == "" || !expr.test(email))
                                                                    {
                                                                        $("#mensaje4").fadeIn();
                                                                        return false;
                                                                    }
                                                                    else
                                                                        {
                                                                            $("#mensaje4").fadeOut(); 
                                                                        }
                                                            }
                                                }
                                    }
                        });
                });
    </script>

</head>
<body>
<!--Creamos el Formulario-->
<form action="procesos/actualizar.php" method="POST">

<h2>Formulario de Registro</h2>

<!--Creamos un input y lo ponemos oculto por el cual es el que vamos a pasar el id-->
    <input type=hidden name="id" value="<?php echo $id ?>" >

    <label>Nombre</label>
    <input type="text" name="txtnombre" value="<?php echo $ver[0]?>" id="itnombre">
    <!--Creamos un div donde vaos a mostrar el mensaje de validacion-->
    <div id="mensaje1" class="errores">Ingrese nombre</div>

    <label>Apellido</label>
    <input type="text" name="txtapellido" value="<?php echo $ver[1]?>" id="itapellido">
    <!--Creamos un div donde vaos a mostrar el mensaje de validacion-->
    <div id="mensaje2" class="errores">Ingrese apellido</div>

    <label>Telefono</label>
    <input type="text" name="txttelefono" value="<?php echo $ver[2]?>" id="ittelefono">
    <!--Creamos un div donde vaos a mostrar el mensaje de validacion-->
    <div id="mensaje3" class="errores">Ingrese telefono</div>

    <label>Correo</label>
    <input type="text" name="txtemail" value="<?php echo $ver[3]?>" id="itemail">
    <!--Creamos un div donde vaos a mostrar el mensaje de validacion-->
    <div id="mensaje4" class="errores">Email invalido</div>

    <input type="submit" value="Actualizar" id="bEnviar">
</form>
    
</body>
</html>