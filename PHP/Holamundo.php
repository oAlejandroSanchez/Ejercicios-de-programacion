<?php

class Holamundo{                //Ejemplo de clase
    public $a = "Hello world";  //Ejemplo de atribuo
    public function hola(){     //Ejemplo de método
        echo "Hola mundo";
    }
}

$objeto = new Holamundo();   //Ejemplo de objeto
echo $objeto->hola()."<br>"; //Se manda a llamar el método de la clase Holamundo
echo $objeto->a;             //Se manda a llama al atributo de la clase Holamundo   