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
                    <img src="build/img/logo.svg" alt="logotipo">
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
        <h1>Contacto</h1>
        <picture>
            <source srcset="build/img/destacada3.webp" type="image/webp">
            <source srcset="build/img/destacada3.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada3.jpg" alt="Imagen contacto">
        </picture>

        <h2>Llene el Formulario de Contacto</h2>

        <form action="" class="formulario">
            <fieldset>
                <legend>Informacion Sobre la Propiedad</legend>

                <p>Como desea ser contactado</p>

                <label for="email">Email:</label>
                <input type="email" id="email" placeholder="Tu email" required>

                <label for="telefono">Teléfono:</label>
                <input type="tel" id="telefono" placeholder="Tu teléfono" required>

                <label for="mensaje">Mensaje:</label>
                <textarea id="mensaje" placeholder="Tu mensaje" required></textarea>
            </fieldset>

            <fieldset>
                <legend>Informacion Sobre la Propiedad</legend>

                <p>Como desea ser contactado</p>

                <div class="forma-contacto">
                    <label for="contactar-telefono">Teléfono</label>
                    <input type="radio" value="telefono" id="contactar-telefono" name="contacto" required>

                    <label for="contactar-email">Email</label>
                    <input type="radio" value="email" id="contactar-email" name="contacto" required>
                </div>

                <p>Si eligio telefono, elija fecha y hora</p>
                <label for="fecha">Fecha:</label>
                <input type="date" id="fecha">

                <label for="hora">Hora:</label>
                <input type="time" id="hora" min="09:00" max="18:00">
            </fieldset>

            <input type="submit" value="Enviar" class="boton-verde">
        </form>
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