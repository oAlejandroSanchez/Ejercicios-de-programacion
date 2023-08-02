<!-- Formulario simple -->
<form method="POST">                       <!--Inicio del formulario-->
    <label>Nombre: </label>                <!--Se imprime mensaje-->
    <input type="text" name="nombre">      <!--Se ingresa el nombre-->
    <br>                                   <!--Salto de línea-->
    <label>Contraseña: </label>            <!--Se imprime mensaje-->
    <input type="text" name="psswd">       <!--Se ingresa la contraseña-->
    <br>                                   <!--Salto de línea-->
    <button type="submit">saludar</button> <!--Butón-->
</form>

<?php
    //Se crea la conexión con la base de datos
    $mysql = new mysqli("localhost","Curso","123456789","Curso_2022-2");
    //Se comprueba si no hubo errores en la conexión
    if ($mysql->connect_errno) {
        echo "Falló la conexión a MySQL: (".$mysql->connect_errno .") ".$mysql->connect_error;
    }else{
        //Se ejecuta el query y se guarda el valor obtenido
        $resultado = $mysql->query('SELECT * FROM usuario WHERE nombre =\''.$_POST['nombre'].'\' AND contrasenia=\''.$_POST["psswd"].'\'');
        //Se comprueba si se encontró una coincidencia o no
        if($resultado->fetch_array()){
            //Se inicia la sesión
            session_start();
            $_SESSION["nombre"] = $_POST["nombre"];
            echo "Bienvenido ".$_SESSION["nombre"];
        }else{
            //Se imprime un mensaje en caso de error
            echo "Lo siento, Usuario o contraseña incorrectos.";
        }
    }
?>                                               