<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página de Proveedores</title>
    
    <!-- CSS -->
    <link rel="stylesheet" href="recursos/css/bootstrap.min.css">

    <!-- JavaScripts -->
    <script src="recursos/js/jquery-3.2.1.min.js"></script>
    <script src="recursos/js/bootstrap.min.js"></script>
</head>
<body>
    <form action="<?php echo $helper->url("Proveedor", "registrar");  ?>" method="post" class="col-lg-5">
        <h3>Añadir Proveedor</h3>
        <hr>
        ID Proveedor: <input type="text" name="idProveedor" class="form-control"/>
        Proveedor: <input type="text" name="proveedor" class="form-control"/>
        Teléfono: <input type="text" name="telefono" class="form-control"/>
        Dirección: <input type="text" name="direccion" class="form-control"/>
        <input type="submit" value="Agregar" class="btn btn-success"/>
    </form>
    <div class="col-lg-7">
            <h3>Listado de Proveedores</h3>
            <hr/>
        </div>
        <section class="col-lg-7" style="height:400px;overflow-y:scroll;">
            <?php foreach($allProveedores as $proveedor) { //recorremos el array de objetos y obtenemos el valor de las propiedades ?>
                <?php echo $proveedor->idProveedor; ?> -
                <?php echo $proveedor->Proveedor; ?> -
                <?php echo $proveedor->Telefono; ?> -
                <?php echo $proveedor->Direccion; ?>
                <div style="float:right;">
                    <a href="<?php echo $helper->url("Proveedor","borrar"); ?>&idProveedor=<?php echo $proveedor->idProveedor; ?>" class="btn btn-danger">Borrar</a>
                </div>
                <hr/>
            <?php } ?>
        </section>
</body>
</html>