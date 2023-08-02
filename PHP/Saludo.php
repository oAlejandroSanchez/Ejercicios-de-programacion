<!-- Formulario simple -->
<form method="POST">                       <!--Inicio del formulario-->
    <label>Ingresa tu nombre: </label>     <!--Se imprime mensaje-->
    <!--Permite ingresar el nombre-->
    <?php echo '<input type="text" name="nombre" value="'.$_POST['nombre'].'">'; ?>
    <br>                                   <!--Salto de línea-->
    <button type="submit">saludar</button> <!--Butón-->
</form>
<!--Se imprime el valor capturado con el saludo-->
<?php echo "Hola ".$_POST['nombre']; ?>                                               