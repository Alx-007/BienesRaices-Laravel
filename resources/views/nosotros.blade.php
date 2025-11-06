<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienes Raices</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
    <header class="header">
        <div class="contenedor">
            <div class="barra">
                <a href="/">
                    <img src="img/logo.svg" alt="logotipo">
                </a>

                <nav class="navegacion">
                    <a href="nosotros">Nosotros</a>
                    <a href="anuncios">Anuncios</a>
                    <a href="contacto">Contacto</a>
                </nav>
            </div>
        </div>
    </header>

    <main class="contenedor seccion">
        <h1>Conoce sobre Nosotros</h1>

        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="img/nosotros.webp" type="image/webp">
                    <source srcset="img/nosotros.jpg" type="image/jpeg">
                    <img loading="lazy" src="img/nosotros.jpg" alt="Sobre Nosotros">
                </picture>
            </div>

            <div class="texto-nosotros">
                <blockquote>25 Años de Experiencia</blockquote> <!-- Contenido  que esta citando --->
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore 
                    magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo 
                    consequat consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore 
                    magna aliqua ut enim ad minim veniam.</p>
                    
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint 
                    occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore 
                    magna aliqua.</p>
            </div>
        </div>
    </main>

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