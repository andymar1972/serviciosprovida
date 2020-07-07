<?php include('_head.php') ?>
<title>Contacto - Servicios Pro Vida</title>

</head>

<body>
  <?php include('_header.php') ?>
  <div class="banner--modify">
    <figure class="banner__img--modify">
      <img src="assets/img/contacto.jpg" alt="">
    </figure>
    <div class="container">
      <h2 class="banner__data">COMO <span>CONTACTARNOS</span></h2>
    </div>
  </div>
  <main class="main">
    <section class="main-layout section">
      <div class="main-layout__container container">
        <div class="main-layout__grid">
          <div class="main-layout__data">
            <p class="main-layout__subtitle subtitle">FORMULARIO <span>DE CONTACTO</span></p>
            <form id="frmContacto" class="form" action="" method="post">
              <div class="panel__confirmacion" id="respa"></div>
              <div class="form__group">
                <label for="nombres-contacto">NOMBRES Y APELLIDOS</label>
                <input class="input" type="text" name="nombres" id="nombres-contacto" required>
              </div>
              <div class="form__group">
                <label for="celular-contacto">CELULAR</label>
                <input class="input" type="text" name="celular" id="celular-contacto" required>
              </div>
              <div class="form__group">
                <label for="email-contacto">EMAIL</label>
                <input class="input" type="email" name="email" id="email-contacto" required>
              </div>
              <div class="form__group">
                <label for="mensaje-contacto">MENSAJE</label>
                <textarea class="input" name="mensaje" id="mensaje-contacto" cols="30" rows="10"></textarea>
              </div>
              <div class="form__group">
                <div>
                  <button type="submit" class="button-submit">ENVIAR<i class="fas fa-envelope-open"></i></button>
                </div>
              </div>
            </form>
          </div>
          <div class="main-layout__images">
            <figure class="main-layout__img ocultar-foto">
              <img src="assets/img/contacto1.jpg" alt="">
            </figure>
            <div class="contacto centrar">
              <p class="contacto__text"><i class="fas fa-mobile-alt"></i> 971902624</p>
              <!-- <p class="contacto__text"><i class="fas fa-envelope"></i> pinedajaragustavo@gmail.com</p> -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php include('_valores.php') ?>
    <?php include('_testimonios.php') ?>
  </main>
  <?php include('_footer.php') ?>
</body>

</html>