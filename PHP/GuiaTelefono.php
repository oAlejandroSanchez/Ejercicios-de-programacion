<?php
echo '<html>
    <head> 
        <title>Chicharronera</title>
    </head>
    <body>
        <form method="POST">
            <label>Nombre: </label><input type="text" name="nombre">
            <br>
            <label>Teléfono: </label><input type="text" name="telefono">
            <br>
            <button type="submit"> Agregar </button>
        </form>
    </body>
</html>';

function add(){
    $nom = $_POST['nombre'];
    $tel = $_POST['telefono'];

    $persona = array(
        "name" => $nom,
        "phone" => $tel
    );
    echo $contactos;
    $contactos = array($persona);
    echo $contactos;
    echo '<ul>
        <li type="circle">'.$contactos[0]["name"].'</li>
        <li type="circle">'.$contactos[0]["phone"].'</li>
    </ul>';
}

echo add();