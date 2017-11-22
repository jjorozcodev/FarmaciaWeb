<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página de Proveedores</title>
    
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
                    <h3>Listado de Proveedores</h3>
                    <input id="agregar" type="button" value="Nuevo" class="button special" />
                    
                    <!-- Tabla -->
                    <div class="input-group"> <span class="input-group-addon"><b>Buscar:</b></span>
                            <input autofocus id="criterio" type="text" class="form-control" placeholder="Ingrese texto para la búsqueda...">
                    </div>
                    <hr>
                    <table class="table-wrapper">
                        <thead>
                            <tr>
                                <th>COD</th>
                                <th>PROVEEDOR</th>
                                <th>TELEFONO</th>
                                <th>DIRECCION</th>
                                <th>ACCIONES</th>
                            </tr>
                        </thead>
                        <tbody class="contenidoTabla">
                        <tr>
                        <?php foreach($allProveedores as $proveedor) { //recorremos el array de objetos y obtenemos el valor de las propiedades ?>
                            <?php echo "<tr>" ?>
                                <?php echo "<td>".$proveedor->idProveedor."</td>" ?>
                                <?php echo "<td>".$proveedor->Proveedor."</td>" ?>
                                <?php echo "<td>".$proveedor->Telefono."</td>" ?>
                                <?php echo "<td>".$proveedor->Direccion."</td>" ?>
                                <td><input type="button" value="Editar" class="button special small edicion" onclick="mostrarModalEditar(<?php echo $proveedor->idProveedor; ?>)" /> 
                                    <a class="btn button small" href="<?php echo $helper->url("Proveedor","borrar"); ?>&idProveedor=<?php echo $proveedor->idProveedor; ?>">Borrar</a>
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
                    <li><a href="https://www.facebook.com/JJ.OrozcoLopez.13" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
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
        <div id="modalAgregar" class="modal">
            <div class="modal-content">
                <div class="modal-header">
                <h2>Registrar Proveedor</h2>
                </div>
                <div class="modal-body">
                    <!--Creacion de formulario-->
                    Proveedor: <input type="text" name="proveedor" class="form-control"/>
                    Teléfono: <input type="text" name="telefono" class="form-control"/>
                    Dirección: <input type="text" name="direccion" class="form-control"/>  
                </div>
                <div class="modal-footer">
                    <!--button-->        
                    <input type="submit" value="Agregar" class="button special small"/>
                    <input id="cerrarAgregar" type="button" value="Cancelar" class="button small close"/>
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
                    <form action="" method="post" class="col-lg-5"><!--corresponde al metodo crear proveedor-->
                        <input id="id" type="text" name="idProveedor" class="form-control" style="display: none;"/>
                        Proveedor: <input type="text" name="proveedor" class="form-control"/>
                        Teléfono: <input type="text" name="telefono" class="form-control"/>
                        Dirección: <input type="text" name="direccion" class="form-control"/>
                        
                    </form>
                </div>
                <div class="modal-footer">
                    <!--button-->        
                    <input type="submit" value="Editar" class="button special small confirmar"/>
                    <input id="cerrarEditar" type="button" value="Cancelar" class="button small close"/>
                </div>
            </div>
        </div>  
        <div class="overlay-container">
            <div class="window-container zoomout">
                
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
        
        
        <script>
            $(document).ready(function() {

            $('#criterio').keyup(function () {
                var rex = new RegExp($(this).val(), 'i');
                    $('.contenidoTabla tr').hide();
                    $('.contenidoTabla tr').filter(function () {
                        return rex.test($(this).text());
                    }).show();
            
                });

                $('.button').click(function() {
		
                    type = $(this).attr('data-type');
                    
                    $('.overlay-container').fadeIn(function() {
                        
                        window.setTimeout(function(){
                            $('.window-container.'+type).addClass('window-container-visible');
                        }, 30);
                        
                    });
                });
                
                $('.close').click(function() {
                    $('.overlay-container').fadeOut().end().find('.window-container').removeClass('window-container-visible');
                });



            });
        </script>
        <script>
            // MOSTRAR EL POPUP PARA AGREGAR
            var modalAgregar = document.getElementById('modalAgregar');
            
            var mostrarAgregar = document.getElementById('agregar');

            mostrarAgregar.onclick = function() {
                modalAgregar.style.display = "block";
            }

            var cerrarAgregar = document.getElementById('cerrarAgregar');

            cerrarAgregar.onclick = function() {
                modalAgregar.style.display = "none";
            }

            
            //CONFIRMAR EDICION
            var modalEditar = document.getElementById('modalEditar');
            var confirmarEditar = document.getElementsByClassName('confirmar');
            var i;
            for (i = 0; i < confirmarEditar.length; i++) {
                confirmarEditar[i].addEventListener('click', function(){
                    var url = "<?php echo $helper->url("Proveedor","editar") ?>";
                    var urlID= url+"&idProveedor="+$('#id').val()
                    //"&idProveedor="+$('#id').val());
                    alert(ulrID);
                    
                });
            }
           
            //CERRAR EL POPUP PARA EDITAR
            var cerrarEditar = document.getElementById('cerrarEditar');
            cerrarEditar.onclick = function() {
                modalEditar.style.display = "none";
            }             
           
        </script>
            
         <!--MOSTRAR EL POPUP PARA EDITAR-->
         <script type="text/javascript">
            function mostrarModalEditar(id) {
                var modalEditar = document.getElementById('modalEditar');
                modalEditar.style.display = "block";
                $("#id").val(id); //asigna el valor al campo id
            }
        </script>
</body>
</html>