<!DOCTYPE html>
<html lang="PT-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

<div class="container">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <section class="interna">
    <h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
    <img src="" alt="">
    <p><?php the_content(); ?></p>
  </section>
<?php endwhile; else: ?>
    <div class="interna">
        <h2>Nada Encontrado</h2>
        <p>Erro 404</p>
        <p>Lamentamos mas não foram encontrados artigos.</p>
    </div>
<?php endif; ?>
</div>
<?php else: ?>
<?php endif; ?>

</body>
</html>



 
