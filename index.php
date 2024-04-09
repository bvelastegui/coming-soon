<?php session_start() ?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="UTF-8"/>
  <meta
    name="description"
    content="Candy's party es líder en la organización de fiestas infantiles en la ciudad de Quito, Guayaquil, Ibarra y Cuenca"
  >
  <meta
    name="keywords"
    content="fiestas infantiles, diversión para niños, cumpleaños, happy birthday, kids party, fiestas para niños quito"
  />
  <meta name="author" content="Bryan Velastegui"/>
  <meta name="viewport" content="width=device-width,initial-scale=1"/>
  <meta http-equiv=X-UA-Compatible content="ie=edge"/>
  <meta name="robots" content="index,follow"/>
  <meta name="copyright" content="2024 Candy's party"/>
  <meta property="og:title" content="Candy's Party"/>
  <meta property="og:description" content="Donde los sueños de los más pequeños se hacen realidad"/>
  <meta property="og:image" content="https://fiestas-infantiles.party/img/slogan.jpeg"/>
  <meta property="og:locale" content="es_EC"/>
  <link
    rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous"
  >
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lato&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Muli:wght@300;700&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto&display=swap">
  <script src="https://kit.fontawesome.com/3c09bcb51a.js"></script>
  <title>Candy's Party - Muy Pronto</title>
  <link href="styles/main.css" rel="stylesheet">
  <link rel="icon" href="sweets.png">
</head>
<body>
<div class="container">
  <div class="row">
    <aside class="left-wrap col-12 col-md-5">
      <div class=left>
        <p><span class=days></span><span class=small> días</span></p>
        <p>&nbsp;<span class=hours></span><span class=small> horas</span></p>
        <p>&nbsp;&nbsp;<span class=minutes></span><span class=small> minutos</span></p>
        <p>&nbsp;&nbsp;&nbsp;<span class=seconds></span><span class=small> segundos</span></p>
      </div>
    </aside>
    <main class="col-12 col-md-7 right">
      <div class="mainInfo">
        <h1>Candy's Party - Muy Pronto</h1>
        <p class="slogan">
          Donde los sueños de los más pequeños se hacen realidad
        </p>
        <form
          class="form-subscribe"
          action="/subscription.php"
          method="post"
        >
          <input
            aria-label="Correo electrónico"
            type="email"
            class="form"
            placeholder="jhondoe@gmail.com"
            name="email"
            required
          >
          <button type="submit">Subscribirme</button>
        </form>
        <?php if (isset($_SESSION['success'])): ?>
            <?php if ($_SESSION['success'] === true): ?>
            <div class="alert alert-success mt-4 alert-dismissible fade show" style="margin-left: 2em">
              <strong>¡Gracias por subscribirte!</strong> Te mantendremos informado.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <?php else: ?>
            <div class="alert alert-info mt-4 alert-dismissible fade show" style="margin-left: 2em">
              <strong>¡Ya te encuentras subscrito!</strong> Te mantendremos informado.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <?php endif ?>
        <?php endif ?>
      </div>
      <ul class=icon-list>
        <li class="icon">
          <a class="instagram" target="_blank" href="https://www.instagram.com/candys_party_uio"></a>
        </li>
        <li class="icon">
          <a class="whatsapp" target="_blank" href="https://wa.me/593969437072"></a>
        </li>
        <li class="icon">
          <a class="tiktok" target="_blank" href="https://www.tiktok.com/@candymdk74d"></a>
        </li>
        <li class="icon">
          <a class="whatsapp" target="_blank" href="https://wa.me/593985505746"></a>
        </li>
      </ul>
    </main>
  </div>
</div>
<script type="text/javascript" src="scripts/bundle.js"></script>
<?php if (!empty($_SESSION['db_error'])): ?>
  <script>
      console.error("<?= $_SESSION['db_error'] ?>")
  </script>
<?php endif; ?>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>
</html>
<?php
unset($_SESSION['db_error']);
unset($_SESSION['success']);