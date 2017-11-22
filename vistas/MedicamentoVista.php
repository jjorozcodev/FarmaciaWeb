<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página de Medicamentos</title>
    
    <!-- CSS -->
    <link rel="stylesheet" href="recursos/css/main.css">
    
    <!-- JavaScripts -->
    <script src="recursos/js/jquery-3.2.1.min.js"></script>
    <script src="recursos/js/bootstrap.min.js"></script>
</head>
<body>

    <!-- Wrapper -->
    <div id="wrapper">
        <!-- Header -->
            <header id="header" class="alt">
                <a href="index.php" class="logo"><strong>Farmacia Web</strong> <span>by JAB</span></a>
                <nav>
                    <a href="#menu">Menú</a>
                </nav>
            </header>

        <!-- Menu -->
            <nav id="menu">
                <ul class="links">
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="sugerencias.html">Sugerencias</a></li>
                </ul>
                <ul class="actions vertical">
                    <li><a href="#" class="button special fit">Administrar</a></li>
                    <li><a href="#" class="button fit">Ingresar</a></li>
                </ul>
            </nav>

        <!-- Main -->
        <div id="main">
            <!-- One -->
            <section id="one">
                <div>
                    <h3>Listado de Medicamentos</h3>
                    <input type="button" value="Nuevo" class="btn button special" data-type="zoomout" />
                    
                    <!-- Tabla -->
                    <div class="input-group"> <span class="input-group-addon"><b>Buscar:</b></span>
                            <input id="criterio" type="text" class="form-control" placeholder="Ingrese texto para la búsqueda...">
                    </div>
                    <hr>
                    <table class="table-wrapper">
                        <thead>
                            <tr>
                                <th>COD</th>
                                <th>MEDICAMENTO</th>
                                <th>PRESENTACION</th>
                                <th>EXISTENCIAS</th>
                                <th>PRECIO C$</th>
                            </tr>
                        </thead>
                        <tbody class="contenidoTabla">
                        <tr>
                        <?php foreach($allMedicamentos as $medicamento) { //recorremos el array de objetos y obtenemos el valor de las propiedades ?>
                            <?php echo "<tr>" ?>
                                <?php echo "<td>".$medicamento->idMedicamento."</td>" ?>
                                <?php echo "<td>".$medicamento->Medicamento."</td>" ?>
                                <?php echo "<td>".$medicamento->Presentacion."</td>" ?>
                                <?php echo "<td>".$medicamento->Existencias."</td>" ?>
                                <?php echo "<td>".$medicamento->Precio."</td>" ?>
                                <td><a class="btn button special small" href="<?php echo $helper->url("Medicamento","editar"); ?>&idMedicamento=<?php echo $medicamento->idMedicamento; ?>">Editar</a>
                                    <a class="btn button small" href="<?php echo $helper->url("Medicamento","borrar"); ?>&idMedicamento=<?php echo $medicamento->idMedicamento; ?>">Borrar</a>
                                    <!--Agregar otro link para más acciones-->
                                </td>                     
                            <?php echo "</tr>" ?>
                        <?php } ?>

                        </tbody>
                    </table>
                </div>
            </section>    
        </div>
        <!-- Footer -->
        <footer id="footer">
            <div class="inner">
                <ul class="icons">
                    <!--<li><a href="https://www.twitter.com/farmaciaweb" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>-->
                    <li><a href="https://www.facebook.com/FCTyA.UCA/" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
                    <!--<li><a href="https://www.instagram.com/farmaciaweb" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>-->
                    <li><a href="https://github.com/soy-jj/farmaciaweb" class="icon alt fa-github"><span class="label">GitHub</span></a></li>
                    <!--<li><a href="https://www.github.com/farmaciaweb" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li>-->
                </ul>
                <ul class="copyright">
                    <li>Todos los derechos reservados &copy UCA 2017</li><li>Design: <a href="http://www.uca.edu.ni"><b>Equipo Jiren</b></a></li>
                </ul>
            </div>
        </footer>

    </div>

        <!--POPUP (permanece oculto)-->                 
        <div class="overlay-container">
            <div class="window-container zoomout">
                <form action="<?php echo $helper->url("Proveedor", "registrar");  ?>" method="post" class="col-lg-5"><!--corresponde al metodo crear medicamento-->
                    <h3>Registrar Proveedor</h3>
                    <hr>
                    <!--Creacion de formulario-->
                    Proveedor: <input type="text" name="proveedor" class="form-control"/>
                    Teléfono: <input type="text" name="telefono" class="form-control"/>
                    Dirección: <input type="text" name="direccion" class="form-control"/>
                    
                    <!--button-->        
                    <input type="submit" value="Agregar" class="button special small"/>
                    <input type="button" value="Cancelar" class="button small close"/>
                </form>
            </div>
        </div>
        <!-- Scripts -->
        <script src="recursos/js/jquery.min.js"></script>
        <script src="recursos/js/jquery.scrolly.min.js"></script>
        <script src="recursos/js/jquery.scrollex.min.js"></script>
        <script src="recursos/js/skel.min.js"></script>
        <script src="recursos/js/util.js"></script>
        <script src="recursos/js/main.js"></script>

        <!-- Funciones propias -->
        <script>
            !window.jQuery && document.write(unescape('%3Cscript src="recursos/js/jquery-3.2.1.min.js"%3E%3C/script%3E'))
        </script>
        
        <script type="text/javascript" src="recursos/js/modal.js"></script>
        
        <script>
            $(document).ready(function () {
                $('#criterio').keyup(function () {
                var rex = new RegExp($(this).val(), 'i');
                    $('.contenidoTabla tr').hide();
                    $('.contenidoTabla tr').filter(function () {
                        return rex.test($(this).text());
                    }).show();

                })

            });

        </script>
</body>
</html>