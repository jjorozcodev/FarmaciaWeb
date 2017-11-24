<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Farmacia Web | Proveedores</title>
    
    <!-- CSS -->
    <link rel="stylesheet" href="recursos/css/main.css">
    
    <!-- JavaScripts -->
    <script src="recursos/js/jquery-3.2.1.min.js"></script>
</head>
<body>

    <!-- Wrapper -->
    <div id="wrapper">
        <!-- Header -->
            <header id="header" class="alt">
                <a href="index.php" class="logo"><strong>Farmacia Web</strong> <span>by JAB</span></a>
                <nav>
                    <input id="agregar" type="button" value="Nuevo" class="button special" />
                    <a href="#menu">Menú</a>
                </nav>
            </header>

        <!-- Menu -->
            <nav id="menu">
                <ul class="links">
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="acerca-de.html">Acerca de nosotros</a></li>
                </ul>
                <ul class="actions vertical">
                    <li><a href="#" class="button special fit">Administrar</a></li>
                    <li><a href="#" class="button fit">Ingresar</a></li>
                </ul>
            </nav>
   
        <!-- Banner -->
        <!-- Note: The "styleN" class below should match that of the header element. -->
            <section id="banner">
                <div class="inner">
                    <header class="major">
                        <h1>Lista de Proveedores</h1>
                    </header>
                    <div class="content">
                        <p>Administrar proveedores aqui.</p>
                        <ul class="actions">
                            <li><a href="#one" class="button next scrolly">Continuar</a></li>
                        </ul>
                    </div>
                </div>
            </section>
        

        <!-- Main -->
        <div id="main">
            <!-- One -->
            <section id="one">
                <div>
                    <!-- Tabla -->
                    <div class="input-group"> <span class="input-group-addon"><b>Buscar:</b></span>
                            <input autofocus id="criterio" type="text" class="form-control" placeholder="Ingrese texto para la búsqueda...">
                    </div>
                    <hr>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>COD</th>
                                    <th>PROVEEDOR</th>
                                    <th>TELEFONO</th>
                                    <th>DIRECCION</th>
                                    <th>ACCIONES</th>
                                </tr>
                            </thead>
                            <tbody>
                            <tr>
                            <?php foreach($allProveedores as $proveedor) { ?>
                                <?php echo "<tr>" ?>
                                    <?php echo "<td>".$proveedor->idProveedor."</td>" ?>
                                    <?php echo "<td>".$proveedor->Proveedor."</td>" ?>
                                    <?php echo "<td>".$proveedor->Telefono."</td>" ?>
                                    <?php echo "<td>".$proveedor->Direccion."</td>" ?>
                                    <td>
                                        <input type="button" value="Editar" class="button special small edicion" onclick="mostrarModalEditar(<?php echo $proveedor->idProveedor; ?>, '<?php echo $proveedor->Proveedor; ?>', '<?php echo $proveedor->Telefono; ?>', '<?php echo $proveedor->Direccion; ?>')" /> 
                                        <a class="btn button small" href="<?php echo $helper->url("Proveedor","borrar"); ?>&idProveedor=<?php echo $proveedor->idProveedor; ?>">Borrar</a>
                                    </td>                     
                                <?php echo "</tr>" ?>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>    
        </div>

        <!-- Footer -->
        <footer id="footer">
            <div class="inner">
                <ul class="icons">
                    <li><a href="https://twitter.com/ucadenicaragua" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
                    <li><a href="https://www.facebook.com/isiUCA/" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
                    <!--<li><a href="https://www.instagram.com/farmaciaweb" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>-->
                    <li><a href="https://github.com/soy-jj/farmaciaweb" class="icon alt fa-github"><span class="label">GitHub</span></a></li>
                    <li><a href="https://www.facebook.com/FCTyA.UCA/" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li>
                </ul>
                <ul class="copyright">
                    <li>Todos los derechos reservados &copy UCA 2017</li><li>Design: <a href="http://www.uca.edu.ni"><b>by JAB</b></a></li>
                </ul>
            </div>
        </footer>

    </div>
        
        <!--POPUPs (permanecen ocultos)-->                 
        
        <div id="modalAgregar" class="modal">
            <div class="modal-content">
                <div class="modal-header">
                <h2>Registrar Proveedor</h2>
                </div>
                <div class="modal-body">
                    <!--Creacion de formulario-->
                    <form action="<?php echo $helper->url("Proveedor", "registrar");  ?>" method="post" class="col-lg-5">
                        Proveedor: <input type="text" name="proveedor" class="form-control"/>
                        Teléfono: <input type="text" name="telefono" class="form-control"/>
                        Dirección: <input type="text" name="direccion" class="form-control"/>  
                        <br>        
                        <input type="submit" value="Agregar" class="button special small"/>
                        <input id="cerrarAgregar" type="button" value="Cancelar" class="button small close"/>
                    </form>
                </div>
               
            </div>
        </div>
        
        <div id="modalEditar" class="modal">
            <div class="modal-content">
                <div class="modal-header">
                <h2>Editar Proveedor</h2>
                </div>
                <div class="modal-body">
                    <!--Creacion de formulario-->
                    <form action="<?php echo $helper->url("Proveedor", "editar");  ?>" method="post" class="col-lg-5">
                        <input id="id" type="text" name="idProveedor" class="form-control" style="display:none"/>
                        Proveedor: <input id="prov" type="text" name="proveedor" class="form-control"/>
                        Teléfono: <input id="tel" type="text" name="telefono" class="form-control"/>
                        Dirección: <input id="dir" type="text" name="direccion" class="form-control"/>
                        <br>
                        <input type="submit" value="Editar" class="button special small confirmar"/>
                        <input id="cerrarEditar" type="button" value="Cancelar" class="button small close"/>    
                    </form>
                </div>
            </div>
        </div>  
        
        <!-- SCRIPTS -->
        <script src="recursos/js/funciones.js"></script>

        <script src="recursos/js/jquery.min.js"></script>
        <script src="recursos/js/jquery.scrolly.min.js"></script>
        <script src="recursos/js/jquery.scrollex.min.js"></script>
        <script src="recursos/js/skel.min.js"></script>
        <script src="recursos/js/util.js"></script>
        <script src="recursos/js/main.js"></script>
        
        <!--SCRIPT PARA MOSTRAR DATOS DE LA TABLA EN EL MODAL DE EDICIÓN-->
        <script type="text/javascript">
            function mostrarModalEditar(id, prov, tel, dir) {
                $('#modalEditar').show();
                $("#id").val(id);
                $("#prov").val(prov);
                $("#tel").val(tel);
                $("#dir").val(dir);
            }
        </script>
</body>
</html>