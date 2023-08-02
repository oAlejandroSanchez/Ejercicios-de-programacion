<!-- Formulario simple -->
<form method="POST">                       <!--Inicio del formulario-->
    <!--Se imprime mensaje-->
    <!--Permite ingresar el nombre-->
    <?php 
    for($indice = 0; $indice < 10; $indice++){
        echo '<label>Ingresa calificación '.($indice+1).': </label>';
        echo '<input type="text" name="'.$indice.'" value="'.$_POST[$indice].'"><br>';
    }?>
    <br>                                   <!--Salto de línea-->
    <button type="submit">Calcular</button> <!--Butón-->
</form>
<!--Se determina si el valor es impar o par-->
<?php 
function promedio(){
    $suma = 0;
    for($indice = 0; $indice < 10; $indice++){
        $suma += $_POST[$indice];
    }
    return $suma /= 10;
}
$promedioFinal = promedio();
echo "Resultado final: ".$promedioFinal;?>                                                     