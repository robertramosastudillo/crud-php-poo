<?php
//Incluimos la conexion y los metodos en los cuales vamos a trabajar
    require_once "connection.php";
    require_once "metodosCrud.php";
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

<!--Validamos los datos-->
    <script>
        var expr = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;

            $(document).ready(function()
                {
                    $("#bEnviar").click(function()
                        {
                            let respuesta = false;
                            var nombre = $("#itnombre").val();
                            var apellido = $("#itapellido").val();
                            var telefono = $("#ittelefono").val();
                            var email = $("#itemail").val();

    
                            if(nombre == "")
                            {
                                $("#mensaje1").fadeIn();
                                    respuesta = false;
                            }else{
                                $("#mensaje1").fadeOut();
                                respuesta = true;
                                
                                    
                            }
                            
                            if(apellido == "")
                            {
                                $("#mensaje2").fadeIn();
                                respuesta = false;
                            }else{
                                $("#mensaje2").fadeOut();
                                 respuesta = true;   
                            }
                            
                            if(telefono == "")
                            {
                                $("#mensaje3").fadeIn();
                                respuesta = false;
                            }else{
                                $("#mensaje3").fadeOut();
                                respuesta = true;   
                            }
                            
                            if(email == "" || !expr.test(email))
                            {
                                $("#mensaje4").fadeIn();
                                respuesta = false;
                            }else{
                                $("#mensaje4").fadeOut();
                                    respuesta = true;
                            }
                            
                            return respuesta;
                                    
                        });
                        
                });
    </script>

</head>
<body>
<!--Creamos el Formulario-->
<form action="procesos/insertar.php" method="POST">

<h2>Formulario de Registro</h2>

    <label>*Nombre</label>
    <input type="text" name="txtnombre" id="itnombre">
    <!--Creamos un div donde vaos a mostrar el mensaje de validacion-->
    <div id="mensaje1" class="errores">Ingrese nombre</div>

    <label>*Apellido</label>
    <input type="text" name="txtapellido" id="itapellido">
    <!--Creamos un div donde vaos a mostrar el mensaje de validacion-->
    <div id="mensaje2" class="errores">Ingrese apellido</div>

    <label>*Telefono</label>
    <input type="text" name="txttelefono" id="ittelefono">
    <!--Creamos un div donde vaos a mostrar el mensaje de validacion-->
    <div id="mensaje3" class="errores">Ingrese telefono</div>

    <label>*Correo</label>
    <input type="text" name="txtemail" id="itemail">
    <!--Creamos un div donde vaos a mostrar el mensaje de validacion-->
    <div id="mensaje4" class="errores">Email invalido</div>

    <input type="submit" value="Agregar" id="bEnviar">

</form>

<div id="main-container"> 
<!--Creacion de tabla-->
<table>
    <tr>
        <thead>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Telefono</th>
            <th>Correo</th>
            <th>Actualizar</th>
            <th>Eliminar</th>
        </thead>
    </tr>
    <?php
        $obj= new metodos();
        $sql="SELECT * FROM persona";
        $datos=$obj->mostrarDatos($sql);

        foreach ($datos as $key )
            {   
    ?>
    <tr>
        <td><?php echo $key['nombre'];?></td>
        <td><?php echo $key['apellido'];?></td>
        <td><?php echo $key['telefono'];?></td>
        <td><?php echo $key['email'];?></td>
        <td>
            <a href="editar.php?id=<?php echo $key['id']?>" >
            Editar
            </a>
        </td>
        <td>
            <a href="procesos/eliminar.php?id=<?php echo $key['id']?>" >
            Eliminar
            </a>
        </td>
    </tr>

    <?php
        }
    ?>
</table>
    
</div>

</body>
</html>