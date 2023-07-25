<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JDR Raices</title>
    <link rel="stylesheet" href="build/css/app.css">
</head>
<body>
    
    <header class="header">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="index.html">
                    <img src="build/img/logo.svg" alt="Logotipo de Bienes Raices">
                </a>

                <div class="mobile-menu">
                    <img src="build/img/barras.svg" alt="icono menu responsive">
                </div>

                <div class="derecha">
                    <img class="dark-mode-boton" src="build/img/dark-mode.svg">
                    <nav class="navegacion">
                        <a href="nosotros.html">Nosotros</a>
                        <a href="blog.html">Blog</a>
                        <a href="contacto.html">Contacto</a>
                        <a href="registro.html">Registro</a>
                        <a href="login.html">Ingresar</a>
                        <a href="productos.html">Productos</a>
                        <a href="carrito.php">carrito</a>
                    </nav>
                </div>
                
            </div> <!--.barra-->
        </div>
    </header>

    <main class="contenedor seccion">
        <h2>Casas y Depas en Venta</h2>
        <div class="contenedor-anuncios">
            <?php 
            include("conexion.php");
            
            $sql="SELECT * FROM productos";
            if(isset($_GET["cod"])) {
                if($_GET["cod"] != "")  $sql="SELECT * FROM productos WHERE Id_producto = '" . $_GET["cod"] . "'";
            }
            $result=mysqli_query($conn,$sql);
            
            while($mostrar=mysqli_fetch_array($result))
            {
            ?>
            <div class="anuncio">
                            <picture>
                                <source srcset="https://www.selvacorealty.com/fotos_propiedades/1229/1-casa-de-lujo-vista-al-mar-venta-puerto-cancun-luxury-rsidence-house-sale-cancun-e05f.jpg" type="image/webp">
                                <source srcset="https://www.selvacorealty.com/fotos_propiedades/1229/1-casa-de-lujo-vista-al-mar-venta-puerto-cancun-luxury-rsidence-house-sale-cancun-e05f.jpg" type="image/jpeg">
                                <img loading="lazy" src="build/img/anuncio1.jpg" alt="anuncio">
                            </picture>
            
                            <div class="contenido-anuncio">
                                <h3><?php echo $mostrar['Nombre'] ?></h3>
                                <p class="precio"><?php echo $mostrar['Precio'] ?></p>
                                <p class="Tipo"><?php echo $mostrar['Tipo'] ?></p>
                            
            
                                <ul class="iconos-caracteristicas">
                                    <li>
                                        <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                                        <p>3</p>
                                    </li>
                                    <li>
                                        <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                                        <p>3</p>
                                    </li>
                                    <li>
                                        <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitaciones">
                                        <p>4</p>
                                    </li>
                                </ul>
            
                                <a href="agregar_carrito.php?id=<?=$mostrar['Id_producto']?>" class="boton-amarillo-block">
                                    Agregar al carrito
                                </a>
                            </div><!--.contenido-anuncio-->
                        </div><!--anuncio-->
            <?php
            }
            ?>
    </main> 
    <footer class="footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="nosotros.html">Nosotros</a>
                <a href="blog.html">Blog</a>
                <a href="contacto.html">Contacto</a>
                <a href="registro.html">Registro</a>
                <a href="login.html">Ingresar</a>
                <a href="productos.html">Productos</a>
            </nav>
        </div>
    </footer>

    <script src="build/js/bundle.min.js"></script>
</body>
</html>