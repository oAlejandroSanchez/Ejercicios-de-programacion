<?php
echo '<html>
    <head> 
        <title>Chicharronera</title>
    </head>
    <body>
        <form method="POST">
            <input type="text" name="a"><label>x^2 + </label>
            <input type="text" name="b"><label>x + </label>
            <input type="text" name="c"><label> = 0 </label>
            <br>
            <button type="submit">Calcular</button>
        </form>
    </body>
</html>';

function calcular(){
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];

    $raiz = ($b*$b)-(4*$a*$c);

    if($raiz < 0){
        $raiz = sqrt((-1)*$raiz);
        echo '<br>x1 = '.round((-$b)/(2*$a),2).' + '.round(($raiz)/(2*$a),2).'i<br>';
        echo 'x2 = '.(-$b)/(2*$a).' - '.($raiz)/(2*$a).'i<br>';
    }else{
        $raiz = sqrt($raiz);
        echo '<br>x1 = '.((-$b)+($raiz))/(2*$a).'<br>';
        echo 'x2 = '.((-$b)-($raiz))/(2*$a).'<br>';
    }
}

echo calcular();