<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?php echo $meta_title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="<?php echo site_url('css/style.min.css'); ?>">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
  <?php $logo = ($logo_md) ? 'logo-medium' : 'logo-home'; ?>
  <header class="Header">
    <?php if ($about) : ?>
    <section class="Header-about">
      <article class="Header-item Header-item--logo">
        <h1 class="Header-logo text-center">
          <a href="<?php echo site_url(); ?>"><img src="<?php echo site_url('images/' . $logo . '.png'); ?>" alt="" class="img-responsive center-block" /></a>
        </h1>
      </article>
      <article class="Header-item Header-item--info">
        <h2 class="Header-title text-center text-uppercase">Forget es la aplicación que te soluciona la vida al momento de hacer regalos.</h2>
        <p class="Header-text text-center">Encuentra los regalos perfectos puestos directamente por tus amigos. Conoce más en este video:</p>
      </article>
    </section>
    <?php else : ?>
      <h1 class="Header-logo text-center">
        <a href="<?php echo site_url(); ?>"><img src="<?php echo site_url('images/' . $logo . '.png'); ?>" alt="" class="img-responsive center-block" /></a>
      </h1>
    <?php endif; ?>
  </header><!-- end Header -->
