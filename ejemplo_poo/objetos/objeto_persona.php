<?php 
    // Referencia al archivo donde está la clase
    include_once('../clases/Persona.php');

    // Verificar si los datos han sido enviados
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Instanciar la clase Persona
        $persona = new Persona();

        // Asignar los valores del formulario a los atributos de la clase
        $persona->asignarNombre($_POST['nombre']);
        $persona->apellido = $_POST['apellido'];
        $persona->telefono = $_POST['telefono'];
        $persona->direccion = $_POST['direccion'];

        // Mostrar los datos de la persona
        echo "<br>Nombre: " . $persona->verNombre();
        echo "<br>Apellido: " . $persona->apellido;
        echo "<br>Teléfono: " . $persona->telefono;
        echo "<br>Dirección: " . $persona->direccion;
        echo "<br>" . $persona->nombreCompleto();
        echo "<br>" . $persona->verDatos();
    } else {
        echo "No se han enviado datos.";
    }
?>
