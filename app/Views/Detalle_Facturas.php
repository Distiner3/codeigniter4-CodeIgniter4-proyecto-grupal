<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Detalle de Facturas</title>

    <!-- CSS personalizado -->
    <link rel="stylesheet" href="<?= base_url('css/main.css') ?>">

    <link rel="stylesheet" type="text/css" href="<?= base_url('datatables/datatables.min.css') ?>">
    <!--datables estilo bootstrap 4 CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css') ?>">
    <!--font awesome con CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">


    <link rel="stylesheet" href="<?= base_url('css/jquery.dataTables.min.css') ?>">
</head>

<body>

    <div class="container">
        <h1>Detalle de Facturas</h1>

        <div id="center_button">
            <button onclick="location.href='index.php'" class="btn btn-secondary mt-3 mb-3">Volver a Menu</button>
        </div>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary mt-3 mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Agregar nuevo detalle de factura
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Agregar detalle</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('agregar_detalle') ?>" method="get">

                            <div class="mb-3">
                                <label for="txt_id" class="form-label">Correlativo</label>
                                <input type="text" class="form-control" name="txt_correlativo" placeholder="Correlativo del detalle">
                            </div>
                            <div class="mb-3">
                                <label for="txt_marca" class="form-label">ID Producto</label>

                                <select name="txt_id_producto">
                                    <?php

                                        use App\Controllers\Detalle_Facturas;
                                        use App\Models\Detalle_Factura;

                                    foreach ($productos as $registros) :
                                    ?>
                                         <option value=<?php echo $registros['id_producto'] ?>><?php echo $registros['id_producto'] ?></option>;


                                    <?php
                                    endforeach;
                                    ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="txt_talla" class="form-label">ID Sucursal</label>
                                <select  name="txt_id_sucursal">
                                    <?php
                                    foreach ($sucursales as $registros) :
                                    ?>
                                         <option value=<?php echo $registros['id_sucursal'] ?>><?php echo $registros['id_sucursal'] ?></option>;


                                    <?php
                                    endforeach;
                                    ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="txt_color" class="form-label">Cantidad</label>
                                <input type="text" class="form-control" name="txt_cantidad" placeholder="Cantidad">
                            </div>
                            <div class="mb-3">
                                <label for="txt_descripcion" class="form-label">Precio</label>
                                <input type="text" class="form-control" name="txt_precio" placeholder="Precio">
                            </div>
                            <div class="mb-3">
                                <label for="txt_precio" class="form-label">No. Venta</label>
                                <input type="text" class="form-control" name="txt_no_venta" placeholder="No. Venta">
                            </div>

                            <div class="mb-3">
                                <input type="submit" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>



        <table class="table table-success table-striped pt-3 pb-3" id="dataTable">
            <thead>
                <tr>
                    <th>Correlativo</th>
                    <th>ID Producto</th>
                    <th>ID Sucursal</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th>No. Venta</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                
                foreach ($detalle_facturas as $registros) :


                ?>
                    <tr>
                        <td><?php echo $registros['correlativo'] ?></td>
                        <td><?php echo $registros['id_producto'] ?></td>
                        <td><?php echo $registros['id_sucursal'] ?></td>
                        <td><?php echo $registros['cantidad'] ?></td>
                        <td><?php echo $registros['precio'] ?></td>
                        <td><?php echo $registros['no_venta'] ?></td>
                        <td>


                            <a href="<?= base_url('actualizar_detalle/' . $registros['correlativo']) ?>">Actualizar</a href> 
                            /
                            <a href="<?=base_url('eliminar_detalle/' . $registros['correlativo'])?>"
                            onclick="return confirm('Seguro que quiere eliminar el registro');">Eliminar</a>
                        </td>
                    </tr>

                <?php
                endforeach;
                ?>
            </tbody>


        </table>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!--datatable-->
    <script src="<?= base_url('js/jquery-3.5.1.js') ?>"></script>

    <!-- datatables JS -->
    <script type="text/javascript" src="<?= base_url('datatables/datatables.min.js') ?>"></script>


    <!-- para usar botones en datatables JS -->
    <script src="<?= base_url('datatables/Buttons-1.5.6/js/dataTables.buttons.min.js') ?>"></script>
    <script src="<?= base_url('datatables/JSZip-2.5.0/jszip.min.js') ?>"></script>
    <script src="<?= base_url('datatables/pdfmake-0.1.36/pdfmake.min.js') ?>"></script>
    <script src="<?= base_url('datatables/pdfmake-0.1.36/vfs_fonts.js') ?>"></script>
    <script src="<?= base_url('datatables/Buttons-1.5.6/js/buttons.html5.min.js') ?>"></script>

    <!-- código JS propìo-->
    <script type="text/javascript" src="<?= base_url('js/main.js') ?>"></script>

</body>

</html>