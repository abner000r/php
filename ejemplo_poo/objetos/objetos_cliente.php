<?php
    //incluir el archivo Cliente.php para poder utilizar
    //el código que contienen
    include_once('../clases/Cliente.php');
    //crear un objeto de tipo Cliente = instanciar la clase
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $cliente = new Cliente();
    
    $cliente->nit=['nit'];
    $cliente->telefono=[ 'telefono'];
    $cliente->apellido=[ 'apellido'];
    $cliente->asignarNombre("nombre");
    $cliente->direccion=[ 'direccion'];

    echo "<br>Nombre: " . $cliente->verNombre();
    echo "<br>Apellido: " . $cliente->apellido;
    echo "<br>Teléfono: " . $cliente->telefono;
    echo "<br>Dirección: " . $cliente->direccion;
    echo "<br>Nit: " . $cliente->nit;

    echo "<br>" . $cliente->nombreCompleto();
    echo "<br>" . $cliente->verDatos();
    } 
    else {
        echo "No se han enviado datos.";
    }

    //echo "<br>". $cliente->nombreCompleto();
?>