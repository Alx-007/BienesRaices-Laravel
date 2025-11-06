<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienes Raices</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
    <header class="header inicio">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="/">
                    <img src="build/img/logo.svg" alt="logotipo">
                </a>

                <nav class="navegacion">
                    <a href="nosotros">Nosotros</a>
                    <a href="anuncios">Anuncios</a>
                    <a href="contacto">Contacto</a>
                </nav>
            </div>

            <h1>Venta de Casas y Departamentos Exclusivos</h1>
        </div>
    </header>

    <main class="contenedor seccion">
        <h1>Mas Sobre Nosotros</h1>

        <div class="iconos-nosotros">
            <div class="icono">
                <img src="img/icono1.svg" alt="Icono seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.Lorem ipsum dolor sit amet consectetur 
                    adipisicing elit. Quisquam, quod, Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.</p>
            </div>
            <div class="icono">
                <img src="img/icono2.svg" alt="Icono precio" loading="lazy">
                <h3>Precio</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.Lorem ipsum dolor sit amet consectetur 
                    adipisicing elit. Quisquam, quod, Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.</p>
            </div>
            <div class="icono">
                <img src="img/icono3.svg" alt="Icono tiempo" loading="lazy">
                <h3>Tiempo</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.Lorem ipsum dolor sit amet consectetur 
                    adipisicing elit. Quisquam, quod, Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.</p>
            </div>
        </div>
    </main>

    <section class="seccion contenedor">
        <h2>Casas y Departamentos en Ventas</h2>

        <div class="contenedor-anuncios">
            <div class="anuncio">
                <picture>
                    <source srcset="img/anuncio1.webp" type="image/webp">
                    <source srcset="img/anuncio1.jpg" type="image/jpeg">
                    <img loading="lazy" src="img/anuncio1.jpg" alt="Anuncio 1">
                </picture>
                <div class="contenido-anuncio">
                    <h3>Casa de Lujo en el Lago</h3>
                    <p>Casa en el lago con excelente vista, acabados de lujo a un excelente precio</p>
                    <p class="precio">$3,000,000</p>

                    <ul class="iconos-caracteristicas">
                        <li>
                            <img class="icono" loading="lazy" src="img/icono_wc.svg" alt="icono wc">
                            <p>3</p>
                        </li>
                        <li>
                            <img class="icono" loading="lazy" src="img/icono_estacionamiento.svg" alt="icono estacionamiento">
                            <p>2</p>
                        </li>
                        <li>
                            <img class="icono" loading="lazy" src="img/icono_dormitorio.svg" alt="icono habitaciones">
                            <p>4</p>
                        </li>
                    </ul>

                    <a href="anuncio" class="boton boton-amarillo">Ver Propiedad</a>
                </div><!--contenido anuncio-->
            </div><!--anuncio-->

            <div class="anuncio">
                <picture>
                    <source srcset="img/anuncio2.webp" type="image/webp">
                    <source srcset="img/anuncio2.jpg" type="image/jpeg">
                    <img loading="lazy" src="img/anuncio2.jpg" alt="Anuncio 2">
                </picture>
                <div class="contenido-anuncio">
                    <h3>Casa en la Playa</h3>
                    <p>Casa en el lago con excelente vista al pie de la playa, excelente para familia</p>
                    <p class="precio">$3,000,000</p>

                    <ul class="iconos-caracteristicas">
                        <li>
                            <img class="icono" loading="lazy" src="img/icono_wc.svg" alt="icono wc">
                            <p>3</p>
                        </li>
                        <li>
                            <img class="icono" loading="lazy" src="img/icono_estacionamiento.svg" alt="icono estacionamiento">
                            <p>2</p>
                        </li>
                        <li>
                            <img class="icono" loading="lazy" src="img/icono_dormitorio.svg" alt="icono habitaciones">
                            <p>4</p>
                        </li>
                    </ul>

                    <a href="anuncio" class="boton boton-amarillo">Ver Propiedad</a>
                </div><!--contenido anuncio-->
            </div><!--anuncio-->

            <div class="anuncio">
                <picture>
                    <source srcset="img/anuncio3.webp" type="image/webp">
                    <source srcset="img/anuncio3.jpg" type="image/jpeg">
                    <img loading="lazy" src="img/anuncio3.jpg" alt="Anuncio 3">
                </picture>
                <div class="contenido-anuncio">
                    <h3>Casa con Piscina</h3>
                    <p>Casa de doble piso con excelente piscina, ideal para personas atléticas.</p>
                    <p class="precio">$3,000,000</p>

                    <ul class="iconos-caracteristicas">
                        <li>
                            <img class="icono" loading="lazy" src="img/icono_wc.svg" alt="icono wc">
                            <p>3</p>
                        </li>
                        <li>
                            <img class="icono" loading="lazy" src="img/icono_estacionamiento.svg" alt="icono estacionamiento">
                            <p>2</p>
                        </li>
                        <li>
                            <img class="icono" loading="lazy" src="img/icono_dormitorio.svg" alt="icono habitaciones">
                            <p>4</p>
                        </li>
                    </ul>

                    <a href="anuncio" class="boton boton-amarillo">Ver Propiedad</a>
                </div><!--contenido anuncio-->
            </div><!--anuncio-->

        </div><!--contenedor anuncio-->

        
    </section>

    <footer class="footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="nosotros">Nosotros</a>
                <a href="anuncios">Anuncios</a>
                <a href="contacto">Contacto</a>
            </nav>
        </div>

        <p class="copyright">Todos los derechos reservados 2025</p>
    </footer>

    <script src="build/js/bundle.min.js"></script>
</body>
</html>