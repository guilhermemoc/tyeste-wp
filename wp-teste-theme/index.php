
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drag</title>
      <link href='css/main.css' rel='stylesheet' type='text/css'>
      <link href='<?php bloginfo(template_url); ?>/style.css' rel='stylesheet' type='text/css'>
          <script src="js/parallax.js"></script>
          <link rel="stylesheet" href="css/font-awesome.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

</head>
<body>


<section class="container">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <section class="post">
    <h1><?php the_title(); ?></h1>
    <small>Postado por: <?php the_author() ?>  | em: <?php the_time('d/M/Y') ?> |</small>
    <img class="post-thumb" src="http://i.imgur.com/noU7afD.jpg" alt="" />
  </section>
  <?php endwhile?>
</section>
<?php else: ?>

<?php endif; ?>
</body>
