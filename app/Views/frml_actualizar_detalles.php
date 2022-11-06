<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actualizar Detalle de Factura</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Actualizar Detalle de Factura</h1>
            <form action="<?= base_url('actualizar_detalle') ?>" method="get">

                <div class="mb-3">
                    <label for="txt_id" class="form-label">Correlativo</label>
                    <input type="text" class="form-control" name="txt_id" value="<?=$detalle_facturas['correlativo']?>" readonly>
                </div>
                <div class="mb-3">
                    <label for="txt_marca" class="form-label">ID Producto</label>
                    <input type="text" class="form-control" name="txt_nombre" value="<?=$detalle_facturas['id_producto']?>">
                </div>
                <div class="mb-3">
                    <label for="txt_talla" class="form-label">ID Sucursal</label>
                    <input type="text" class="form-control" name="txt_apellido" value="<?=$detalle_facturas['id_sucursal']?>">
                </div>
                <div class="mb-3">
                    <label for="txt_colores" class="form-label">Cantidad</label>
                    <input type="text" class="form-control" name="txt_telefono" value="<?=$detalle_facturas['cantidad']?>">
                </div>
                <div class="mb-3">
                    <label for="txt_descripcion" class="form-label">Precio</label>
                    <input type="text" class="form-control" name="txt_usuario" value="<?=$detalle_facturas['precio']?>">
                </div>
                <div class="mb-3">
                    <label for="txt_precio" class="form-label">No. Venta</label>
                    <input type="text" class="form-control" name="txt_contraseña" value="<?=$detalle_facturas['no_venta']?>">
                </div>
                <div class="mb-3">
                    <input type="submit" class="form-control" id="formGroupExampleInput" >
                </div>
            </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>