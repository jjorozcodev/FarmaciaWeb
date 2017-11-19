<?php
require_once 'configuracion/globales.php';
require_once 'librerias/ControladorBase.php';
require_once 'librerias/ControladorFrontal.func.php';

if(isset($_GET["controller"])){
    $controladorObj = cargarControlador($_GET["controller"]);
    lanzarAccion($controladorObj);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Farmacia Web</title>

    <link rel="stylesheet" href="recursos/css/main.css">

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

        <!-- Banner -->
            <section id="banner" class="major">
                <div class="inner">
                    <header class="major">
                        <h1>Farmacia Web</h1>
                    </header>
                    <div class="content">
                        <p>Administra tu farmacia a través de la web.</p>
                        <ul class="actions">
                            <li><a href="#one" class="button next scrolly">Continuar</a></li>
                        </ul>
                    </div>
                </div>
            </section>

        <!-- Main -->
            <div id="main">

                <!-- One -->
                    <section id="one" class="tiles">
                        <article>
                            <span class="image">
                                <img src="images/pic01.jpg" alt="" />
                            </span>
                            <header class="major">
                                <h3><a href="index.php?controller=Medicamento&action=index" class="link">Medicamentos</a></h3>
                                <p>Gestionar</p>
                            </header>
                        </article>
                        <article>
                            <span class="image">
                                <img src="images/pic02.jpg" alt="" />
                            </span>
                            <header class="major">
                                <h3><a href="gestion-inventario.html" class="link">Inventario</a></h3>
                                <p>Gestionar</p>
                            </header>
                        </article>
                        <article>
                            <span class="image">
                                <img src="images/pic03.jpg" alt="" />
                            </span>
                            <header class="major">
                                <h3><a href="index.php?controller=Proveedor&action=index" class="link">Proveedores</a></h3>
                                <p>Gestionar</p>
                            </header>
                        </article>
                        <article>
                            <span class="image">
                                <img src="images/pic04.jpg" alt="" />
                            </span>
                            <header class="major">
                                <h3><a href="gestion-empleado.html" class="link">Empleados</a></h3>
                                <p>Gestionar</p>
                            </header>
                        </article>
                        </article>
                        <article>
                            <span class="image">
                                <img src="images/pic06.jpg" alt="" />
                            </span>
                            <header class="major">
                                <h3><a href="gestion-cliente.html" class="link">Clientes</a></h3>
                                <p>Gestionar</p>
                            </header>
                        </article>
                        <article>
                            <span class="image">
                                <img src="images/pic05.jpg" alt="" />
                            </span>
                            <header class="major">
                                <h3><a href="venta-factura.html" class="link">Factura</a></h3>
                                <p>Punto de venta</p>
                            </header>
                        </article>
                    </section>
            </div>
        <!-- Footer -->
            <footer id="footer">
                <div class="inner">
                    <ul class="icons">
                        <li><a href="https://www.twitter.com/farmaciaweb" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
                        <li><a href="https://www.facebook.com/farmaciaweb" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
                        <li><a href="https://www.instagram.com/farmaciaweb" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
                        <li><a href="https://www.github.com/farmaciaweb" class="icon alt fa-github"><span class="label">GitHub</span></a></li>
                        <li><a href="https://www.github.com/farmaciaweb" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li>
                    </ul>
                    <ul class="copyright">
                        <li>&copy; UCA</li><li>Design: <a href="https://www.uca.edu.ni">JAB</a></li>
                    </ul>
                </div>
            </footer>

    </div>

        <!-- Scripts -->
        <script src="recursos/js/jquery.min.js"></script>
        <script src="recursos/js/jquery.scrolly.min.js"></script>
        <script src="recursos/js/jquery.scrollex.min.js"></script>
        <script src="recursos/js/skel.min.js"></script>
        <script src="recursos/js/util.js"></script>
        <script src="recursos/js/main.js"></script>

</body>
</html>