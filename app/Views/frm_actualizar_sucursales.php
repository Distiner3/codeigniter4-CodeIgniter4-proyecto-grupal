<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actualizar Sucursal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Actualizar Sucursal</h1>
            <form action="<?= base_url('actualizar_sucursal') ?>" method="get">

                <div class="mb-3">
                    <label for="txt_id" class="form-label">ID</label>
                    <input type="text" class="form-control" name="txt_id" value="<?=$sucursaldb['id_sucursal']?>" readonly>
                </div>
                <div class="mb-3">
                    <label for="txt_nombre" class="form-label">Nombre Sucursal</label>
                    <input type="text" class="form-control" name="txt_nombre" value="<?=$sucursaldb['nombre_sucursal']?>">
                </div>
                <div class="mb-3">
                    <label for="txt_direccion" class="form-label">Direccion Sucursal</label>
                    <input type="text" class="form-control" name="txt_direccion" value="<?=$sucursaldb['direccion_sucursal']?>">
                </div>
                <div class="mb-3">
                    <label for="txt_telefono" class="form-label">Telefono Sucursal</label>
                    <input type="text" class="form-control" name="txt_telefono" value="<?=$sucursaldb['telefono_sucursal']?>">
                </div>
                <div class="mb-3">
                    <label for="txt_email" class="form-label">Email Sucursal</label>
                    <input type="text" class="form-control" name="txt_email" value="<?=$sucursaldb['email_sucursal']?>">
                </div>
                <div class="mb-3">
                    <label for="txt_nit" class="form-label">Nit</label>
                    <input type="text" class="form-control" name="txt_nit" value="<?=$sucursaldb['nit']?>">
                </div>
                <div class="mb-3">
                    <label for="txt_admin" class="form-label">Id Administrador</label>
                    <input type="text" class="form-control" name="txt_admin" value="<?=$sucursaldb['id_admin']?>">
                </div>
                <div class="mb-3">
                    <input type="submit" class="form-control" id="formGroupExampleInput" >
                </div>
            </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>