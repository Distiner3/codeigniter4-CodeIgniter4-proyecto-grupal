<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actualizar Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Actualizar Producto</h1>
            <form action="<?= base_url('actualizar_admin') ?>" method="get">

                <div class="mb-3">
                    <label for="txt_id" class="form-label">ID</label>
                    <input type="text" class="form-control" name="txt_id" value="<?=$adminisitradores['id_admin']?>" readonly>
                </div>
                <div class="mb-3">
                    <label for="txt_marca" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="txt_nombre" value="<?=$adminisitradores['nombre_admin']?>">
                </div>
                <div class="mb-3">
                    <label for="txt_talla" class="form-label">Apellido</label>
                    <input type="text" class="form-control" name="txt_apellido" value="<?=$adminisitradores['apellido_admin']?>">
                </div>
                <div class="mb-3">
                    <label for="txt_colores" class="form-label">Telefono</label>
                    <input type="text" class="form-control" name="txt_telefono" value="<?=$adminisitradores['telefono_admin']?>">
                </div>
                <div class="mb-3">
                    <label for="txt_descripcion" class="form-label">Usuario</label>
                    <input type="text" class="form-control" name="txt_usuario" value="<?=$adminisitradores['usuario']?>">
                </div>
                <div class="mb-3">
                    <label for="txt_precio" class="form-label">Contraseña</label>
                    <input type="text" class="form-control" name="txt_contraseña" value="<?=$adminisitradores['contrasenia']?>">
                </div>
                <div class="mb-3">
                    <input type="submit" class="form-control" id="formGroupExampleInput" >
                </div>
            </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>