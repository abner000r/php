<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center">Formulario de Cliente</h2>
                <form action="../ejemplo_poo/objetos/objeto_administracion.php" method="post">
                    <div class="form-group">
                        <label for="txtNombre">Nombre:</label>
                        <input type="text" class="form-control" id="txtnNombre" name="txtNombre" required>
                    </div>
                    <div class="form-group">
                        <label for="txtApellido">Apellido:</label>
                        <input type="text" class="form-control" id="txtApellido" name="txtApellido" required>
                    </div>
                    <div class="form-group">
                        <label for="txtTelefono">Teléfono:</label>
                        <input type="text" class="form-control" id="txtTelefono" name="txtTelefono" required>
                    </div>
                    <div class="form-group">
                        <label for="txtDireccion">Dirección:</label>
                        <input type="text" class="form-control" id="txtDireccion" name="txtDireccion" required>
                    </div>
                    <div class="form-group">
                        <label for="txtNit">Nit:</label>
                        <input type="text" class="form-control" id="txtNit" name="txtNit" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>