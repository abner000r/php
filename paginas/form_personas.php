<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Persona</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center">Formulario de Persona</h2>
                <form action="../ejemplo_poo/objetos/objeto_persona.php" method="post">
                    <div class="form-group">
                        <label for="txtNombre">Nombre:</label>
                        <input type="text" class="form-control" id="txtNombre" name="txtNombre" required>
                    </div>
                    <div class="form-group">
                        <label for="txtApellido">Apellido:</label>
                        <input type="text" class="form-control" id="txtApellido" name="txtApellido" required>
                    </div>
                    <div class="form-group">
                        <label for="txtTelefono">Teléfono:</label>
                        <input type="tel" class="form-control" id="txtTelefono" name="txtTelefono" required>
                    </div>
                    <div class="form-group">
                        <label for="txtDireccion">Dirección:</label>
                        <input type="text" class="form-control" id="txtDireccion" name="txtDireccion" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
