<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página de Medicamentos</title>
    
    <!-- CSS -->
    <link rel="stylesheet" href="recursos/css/bootstrap.min.css">

    <!-- JavaScripts -->
    <script src="recursos/js/jquery-3.2.1.min.js"></script>
    <script src="recursos/js/bootstrap.min.js"></script>
</head>
<body>
    <form action="<?php echo $helper->url("Medicamento", "registrar");  ?>" method="post" class="col-lg-5"><!--corresponde al metodo crear medicamento-->
        <h3>Añadir Medicamento</h3>
        <hr>
        <!--Creacion de formulario-->
        ID Medicamento: <input type="text" name="idMedicamento" class="form-control"/>
        Medicamento: <input type="text" name="medicamento" class="form-control"/>
        Presentacion: <input type="text" name="presentacion" class="form-control"/>
        Existencia: <input type="text" name="existencias" class="form-control"/>
        Precio: <input type="text" name="precio" class="form-control"/>
        
        <!--button-->        
        <input type="submit" value="Agregar" class="btn btn-success"/>

    </form>
    <div class="col-lg-7">
            <h3>Listado de Medicamento</h3>
            <hr/>
        </div>
        <section class="col-lg-7" style="height:400px;overflow-y:scroll;">
            <?php foreach($allMedicamento as $medicamento) { //recorremos el array de objetos y obtenemos el valor de las propiedades ?>
                <?php echo $medicamento->idMedicamento; ?> -
                <?php echo $medicamento->Medicamento; ?> -
                <?php echo $medicamento->Presentacion; ?> -
                <?php echo $medicamento->Existencias; ?> -
                <?php echo $medicamento->Precio; ?>
                
                <div style="float:right;">
                    <a href="<?php echo $helper->url("Medicamento","borrar"); ?>&idMedicamento=<?php echo $medicamento->idMedicamento; ?>" class="btn btn-danger">Borrar</a>
                </div>
                <hr/>
            <?php } ?>
        </section>
</body>
</html>