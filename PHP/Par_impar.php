<!-- Formulario simple -->
<form method="POST">                       <!--Inicio del formulario-->
    <label>Ingresa número entero: </label> <!--Se imprime mensaje-->
    <!--Permite ingresar el nombre-->
    <?php echo '<input type="number" name="entero" value="'.$_POST['entero'].'">'; ?>
    <br>                                    <!--Salto de línea-->
    <button type="submit">Calcular</button> <!--Butón-->
</form>
<!--Se determina si el valor es impar o par-->
<?php 
function modulo($valor){
    if(($valor%2) == 0){
        echo 'Número par';
    }else{
        echo 'Número impar';
    }
}
echo modulo($_POST['entero']); ?>                                                        