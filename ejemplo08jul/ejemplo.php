<?php 
    $nombre="Mynor Escobar"; //texto
    $edad=15; /*variable numerica*/
    $booleana = False; //variable boolean
    print("Ejemplo 08/07/2024");
    echo "<br>Hola a todos";
    echo "<br>Suma: 10+ 20 = ". 10+20;
    echo "<br>". 100;
    echo "<br>Bienvenido: ". $nombre;
    if($edad<18){
        echo "<br>Es menor de edad";
    } else{
        echo "<br>Es mayor de edad";
    }
    echo "<br>Tabla de multiplicar del : " . $edad;
    for ($i=1; $i <=10 ; $i++) { 
        echo "<br>".$edad." X ". $i . " = ". $edad * $i;
    }
?>