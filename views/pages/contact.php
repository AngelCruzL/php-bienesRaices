<main class="container section centerContent">
  <h1>Contacto</h1>

  <picture>
    <source srcset="build/img/destacada3.webp" type="image/webp" />
    <source srcset="build/img/destacada3.jpg" type="image/jpeg" />
    <img loading="lazy" src="build/img/destacada3.jpg" alt="Imagen Contacto" />
  </picture>

  <h2>Llene el formulario de contacto</h2>

  <form class="form" method="POST">
    <fieldset>
      <legend>Información Personal</legend>

      <label for="name">Nombre</label>
      <input type="text" name="contact[name]" id="name" placeholder="Tu nombre" required />

      <label for="message">Mensaje</label>
      <textarea name="contact[message]" id="message" required></textarea>
    </fieldset>

    <fieldset>
      <legend>Información sobre la propiedad</legend>

      <label for="options">Vende o compra:</label>
      <select name="contact[options]" id="options" required>
        <option value="" disabled selected>
          -- Seleccione una opción --
        </option>
        <option value="buy">Comprar</option>
        <option value="sell">Vender</option>
      </select>

      <label for="budget">Presupuesto</label>
      <input type="number" name="contact[budget]" id="budget" required />
    </fieldset>

    <fieldset>
      <legend>Información sobre la propiedad</legend>

      <p>¿Cómo desea ser contactado?</p>

      <div class="contactMean">
        <label for="contactPhone">Teléfono</label>
        <input type="radio" name="contact[contact]" value="phone" id="contactPhone" required />

        <label for="contactEmail">Correo Electrónico</label>
        <input type="radio" name="contact[contact]" value="email" id="contactEmail" required />
      </div>

      <div id="contactContainer" class="mt-2"></div>

    </fieldset>

    <input type="submit" value="Enviar" class="btnGreen" aria-label="Enviar formulario" />
  </form>
</main>