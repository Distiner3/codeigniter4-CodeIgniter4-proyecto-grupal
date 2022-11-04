<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Sucursales</title>

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
        <h1>Sucursales</h1>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary mt-3 mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Agregar nueva sucursal
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Agregar sucursal</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('agregar_sucursal') ?>" method="get">

                            <div class="mb-3">
                                <label for="txt_id" class="form-label">ID</label>
                                <input type="text" class="form-control" name="txt_id" placeholder="ID de la sucursal">
                            </div>
                            <div class="mb-3">
                                <label for="txt_nombre" class="form-label">Nombre Sucursal</label>
                                <input type="text" class="form-control" name="txt_nombre" placeholder="Nombre sucursal">
                            </div>
                            <div class="mb-3">
                                <label for="txt_direccion" class="form-label">Direccion Sucursal</label>
                                <input type="text" class="form-control" name="txt_direccion" placeholder="direccion sucursal">
                            </div>
                            <div class="mb-3">
                                <label for="txt_telefono" class="form-label">Telefono sucursal</label>
                                <input type="text" class="form-control" name="txt_telefono" placeholder="telefono sucursal">
                            </div>
                            <div class="mb-3">
                                <label for="txt_email" class="form-label">Email Sucursal</label>
                                <input type="text" class="form-control" name="txt_email" placeholder="email sucursal">
                            </div>
                            <div class="mb-3">
                                <label for="txt_nit" class="form-label">Nit</label>
                                <input type="text" class="form-control" name="txt_nit" placeholder="nit">
                            </div>
                            <div class="mb-3">
                                <label for="txt_admin" class="form-label">ID Administrador</label>
                                <input type="text" class="form-control" name="txt_admin" placeholder="ID del Admin">
                            </div>
                            <div class="mb-3">
                                <input type="submit" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
                            </div>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>



        <table class="table table-success table-striped pt-3 pb-3" id="dataTable">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Direccion</th>
                    <th>Telefono</th>
                    <th>Email</th>
                    <th>Nit</th>
                    <th>Id_Admin</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($sucursales as $registros) :


                ?>
                    <tr>
                        <td><?php echo $registros['id_sucursal'] ?></td>
                        <td><?php echo $registros['nombre_sucursal'] ?></td>
                        <td><?php echo $registros['direccion_sucursal'] ?></td>
                        <td><?php echo $registros['telefono_sucursal'] ?></td>
                        <td><?php echo $registros['email_sucursal'] ?></td>
                        <td><?php echo $registros['nit'] ?></td>
                        <td><?php echo $registros['id_admin'] ?></td>
                        <td>
                            <a href="<?= base_url('actualizar_sucursal/' . $registros['id_sucursal']) ?>">Actualizar</a href>

                            /
                            <a href="<?= base_url('eliminar_sucursal/' . $registros['id_sucursal']) ?>">Eliminar</a>
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