<?php
    //Ejemplo de arreglo indexado
    $indexado = array(0,1,2,3,4,5,"Hola mundo");

    //Ejemplo de arreglo asociativo
    $asociativo = array(
        "clave_1" => "Nombre",
        "clave_2" => "Apellidos",
        "clave_3" => "Dirección"
    );

    //Ejemplo de arreglo multidimensional
    $multidimensional = array(array(0),array(1,2,3),array(4,5,6));
    $Multidimensional = array(
        "clave_1" => array("Nombre","Apellidos"),
        "clave_2" => "Dirección"
    );

    echo $indexado[4]; //Se imprime en pantalla el "Hola mundo"           