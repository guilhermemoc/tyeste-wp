
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Drag</title>
  <link href='css/main.css' rel='stylesheet' type='text/css'>
  <link href='<?php bloginfo(template_url); ?>/style.css' rel='stylesheet' type='text/css'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

</head>
<body>


  <section class="container">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <section class="post">
        <h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
        <small>Postado por: <?php the_author() ?>  | em: <?php the_time('d/M/Y') ?> |</small>
        <?php
        if (has_post_thumbnail()) {
          the_post_thumbnail();
        }else{
          echo '<img class="post-thumb"  src="'.get_bloginfo('template_directory').'/images/thumb-default.jpg" />';
        }
        ?>
      </section>
    <?php endwhile?>
  </section>
<?php else: ?>
<?php endif; ?>
</body>
