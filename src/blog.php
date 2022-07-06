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
      <h1>Nuestro Blog</h1>

      <article class="blogPost">
        <div class="image">
          <picture>
            <source srcset="../build/img/blog1.webp" type="image/webp" />
            <source srcset="../build/img/blog1.jpg" type="image/jpeg" />
            <img loading="lazy" src="../build/img/blog1.jpg" alt="blog" />
          </picture>
        </div>

        <div class="postText">
          <a href="post.html">
            <h4>Terraza en el techo de tu casa</h4>
            <p class="metadata">
              Escrito el: <span>15/07/2022</span> por: <span>Admin</span>
            </p>

            <p>
              Consejos para construir una terraza en el techo de tu casa con los
              mejores materiales y ahorrando tu dinero.
            </p>
          </a>
        </div>
      </article>

      <article class="blogPost">
        <div class="image">
          <picture>
            <source srcset="../build/img/blog2.webp" type="image/webp" />
            <source srcset="../build/img/blog2.jpg" type="image/jpeg" />
            <img loading="lazy" src="../build/img/blog2.jpg" alt="blog" />
          </picture>
        </div>

        <div class="postText">
          <a href="post.html">
            <h4>Guía para la decoración de tu hogar</h4>
            <p class="metadata">
              Escrito el: <span>15/07/2022</span> por: <span>Admin</span>
            </p>

            <p>
              Maximiza el espacio en tu hogar con esta guía, aprende a combinar
              muebles y colores para darle vida a tu espacio.
            </p>
          </a>
        </div>
      </article>

      <article class="blogPost">
        <div class="image">
          <picture>
            <source srcset="../build/img/blog3.webp" type="image/webp" />
            <source srcset="../build/img/blog3.jpg" type="image/jpeg" />
            <img loading="lazy" src="../build/img/blog3.jpg" alt="blog" />
          </picture>
        </div>

        <div class="postText">
          <a href="post.html">
            <h4>Terraza en el techo de tu casa</h4>
            <p class="metadata">
              Escrito el: <span>15/07/2022</span> por: <span>Admin</span>
            </p>

            <p>
              Consejos para construir una terraza en el techo de tu casa con los
              mejores materiales y ahorrando tu dinero.
            </p>
          </a>
        </div>
      </article>

      <article class="blogPost">
        <div class="image">
          <picture>
            <source srcset="../build/img/blog4.webp" type="image/webp" />
            <source srcset="../build/img/blog4.jpg" type="image/jpeg" />
            <img loading="lazy" src="../build/img/blog4.jpg" alt="blog" />
          </picture>
        </div>

        <div class="postText">
          <a href="post.html">
            <h4>Guía para la decoración de tu hogar</h4>
            <p class="metadata">
              Escrito el: <span>15/07/2022</span> por: <span>Admin</span>
            </p>

            <p>
              Maximiza el espacio en tu hogar con esta guía, aprende a combinar
              muebles y colores para darle vida a tu espacio.
            </p>
          </a>
        </div>
      </article>
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