<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Menú</title>
</head>

<body>

    <div class="container" aling="center">
        <h1>Menú Principal</h1>

        <div class="list-group">
            <a href="<?= base_url('productos') ?>" class="list-group-item list-group-item-action active" aria-current="true">Productos Diego</a>
            <a href="<?= base_url('sucursales') ?>" class="list-group-item list-group-item-action" aria-current="true">Sucursales Diego</a>
            <a href="#" class="list-group-item list-group-item-action">Detalle facturas Byron</a>
            <a href="#" class="list-group-item list-group-item-action">Administradores Byron</a>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>