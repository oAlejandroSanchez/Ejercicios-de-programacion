<html>
    <head>
        <title>Factorial</title>
    </head>

    <body>
        <form method="POST">
            <label>Ingresa un número entero: </label>
            <input type="text" name="entrada">
            <br>
            <button type="submit">Calcular</button>
            <br>
            <label>El resultado es: </label>
        </form>
    </body>
</html>
<?php
    $m = $_POST['entrada'];
    function factorial($n){
        if($n == 0 || $n == 1){
            $b = 0;
            return 1;
        }else
            return $n*factorial($n-1);
    }
    echo factorial($m);
?>