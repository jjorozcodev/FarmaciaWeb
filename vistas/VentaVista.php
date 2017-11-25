<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Farmacia Web | Medicamentos</title>
    
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
                        <h1>Lista de Medicamentos</h1>
                    </header>
                    <div class="content">
                        <p>Administrar medicamentos aqui.</p>
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
          <?php include("Agregar_factura.php");?>
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
            <h2>Registrar Venta</h2>
            </div>
            <div class="modal-body">
                <!--Creacion de formulario-->
                <form action="<?php echo $helper->url("Venta", "registrar");  ?>" method="post" class="col-lg-5">
                    Fecha: <input type="text" name="fecha" class="form-control"/>
                    Medicamento: <input type="text" name="medicamento" class="form-control"/>
                    Precio (C$): <input type="text" name="precio" class="form-control"/>
                    Cantidad: <input type="text" name="cantidad" class="form-control"/>                    
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
            <h2>Editar Medicamento</h2>
            </div>
            <div class="modal-body">
                <!--Creacion de formulario-->
                <form action="<?php echo $helper->url("Medicamento", "editar");  ?>" method="post" class="col-lg-5">
                    <input id="id" type="text" name="idMedicamento" class="form-control" style="display:none"/>
                    Medicamento: <input id="med" type="text" name="medicamento" class="form-control"/>
                    Presentación: <input id="pres" type="text" name="presentacion" class="form-control"/>
                    Existencias: <input id="exis" type="text" name="existencias" class="form-control"/>
                    Precio (C$): <input id="pre" type="text" name="precio" class="form-control"/>
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
            function mostrarModalEditar(id, med, pres, exis, pre) {
                $('#modalEditar').show();
                $("#id").val(id);
                $("#med").val(med);
                $("#pres").val(pres);
                $("#exis").val(exis);
                $("#pre").val(pre);
            }
        </script>
</body>
</html>