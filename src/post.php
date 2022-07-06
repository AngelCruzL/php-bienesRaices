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
      <h1>Guía para la decoración de tu hogar</h1>

      <p class="metadata">
        Escrito el: <span>15/07/2022</span> por: <span>Admin</span>
      </p>

      <picture>
        <source srcset="../build/img/destacada2.webp" type="image/webp" />
        <source srcset="../build/img/destacada2.jpg" type="image/jpeg" />
        <img loading="lazy" src="../build/img/destacada2.jpg" alt="anuncio" />
      </picture>

      <div class="propertyResume">
        <p>
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus,
          dolore? Corrupti esse minus eligendi cupiditate illo a, harum sequi
          quam voluptatem sunt rerum sapiente doloribus qui delectus
          consequuntur quod ad? Lorem ipsum, dolor sit amet consectetur
          adipisicing elit. Ea nam corporis quae asperiores? Deserunt
          dignissimos accusamus mollitia. Fugiat, voluptatem. Temporibus impedit
          earum beatae mollitia, facere corrupti saepe alias nobis reiciendis!
        </p>

        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti,
          alias a! Harum molestias aut consequatur quisquam laboriosam sunt
          tempora architecto quaerat provident asperiores quos et beatae,
          nostrum ipsa officiis animi!
        </p>
      </div>
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