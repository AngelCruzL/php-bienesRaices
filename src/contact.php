<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bienes Raíces</title>
    <link rel="stylesheet" href="../build/css/app.css" />
    <script src="../build/js/bundle.min.js" defer></script>
  </head>

  <body>
    <header class="header">
      <div class="container headerContent">
        <div class="navbar">
          <a href="index.html">
            <img src="../build/img/logo.svg" alt="Bienes Raíces logo" />
          </a>

          <div class="mobileMenu">
            <img src="../build/img/barras.svg" alt="Icono de menu responsivo" />
          </div>

          <div class="navigationContainer">
            <img src="../build/img/dark-mode.svg" alt="" class="darkMode-btn" />

            <nav class="mainNavigation">
              <ul>
                <li><a href="about.html">Nosotros</a></li>
                <li><a href="announcements.html">Anuncios</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="contact.html">Contacto</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </header>

    <main class="section container centerContent">
      <h1>Contacto</h1>

      <picture>
        <source srcset="../build/img/destacada3.webp" type="image/webp" />
        <source srcset="../build/img/destacada3.jpg" type="image/jpeg" />
        <img
          loading="lazy"
          src="../build/img/destacada3.jpg"
          alt="Imagen Contacto"
        />
      </picture>

      <h2>Llene el formulario de contacto</h2>

      <form class="contactForm">
        <fieldset>
          <legend>Información Personal</legend>

          <label for="name">Nombre</label>
          <input type="text" name="name" id="name" placeholder="Tu nombre" />

          <label for="email">Correo electrónico</label>
          <input
            type="email"
            name="email"
            id="email"
            placeholder="email@email.com"
          />

          <label for="phoneNumber">Teléfono</label>
          <input
            type="tel"
            name="phoneNumber"
            id="phoneNumber"
            placeholder="521468354"
          />

          <label for="message">Mensaje</label>
          <textarea name="message" id="message"></textarea>
        </fieldset>

        <fieldset>
          <legend>Información sobre la propiedad</legend>

          <label for="options">Vende o compra:</label>
          <select name="options" id="options">
            <option value="" disabled selected>
              -- Seleccione una opción --
            </option>
            <option value="buy">Comprar</option>
            <option value="sell">Vender</option>
          </select>

          <label for="budget">Presupuesto</label>
          <input type="number" name="budget" id="budget" />
        </fieldset>

        <fieldset>
          <legend>Información sobre la propiedad</legend>

          <p>¿Cómo desea ser contactado?</p>

          <div class="contactMean">
            <label for="contactPhone">Teléfono</label>
            <input type="radio" name="contact" id="contactPhone" />

            <label for="contactEmail">Correo Electrónico</label>
            <input type="radio" name="contact" id="contactEmail" />
          </div>

          <p>
            Si eligió teléfono, seleccione la fecha y hora de su preferencia
          </p>

          <label for="date">Fecha</label>
          <input type="date" name="date" id="date" />

          <label for="hour">Hora</label>
          <input type="time" name="hour" id="hour" min="09:00" max="18:00" />
        </fieldset>

        <input
          type="submit"
          value="Enviar"
          class="btnGreen"
          aria-label="Enviar formulario"
        />
      </form>
    </main>

    <footer class="footer section">
      <div class="container footerContainer">
        <nav class="mainNavigation">
          <ul>
            <li><a href="about.html">Nosotros</a></li>
            <li><a href="announcements.html">Anuncios</a></li>
            <li><a href="blog.html">Blog</a></li>
            <li><a href="contact.html">Contacto</a></li>
          </ul>
        </nav>
      </div>

      <p class="copyright">Todos los derechos reservados 2022 &copy;</p>
    </footer>
  </body>
</html>