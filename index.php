<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>
</head>

<body  <?php get_header(); ?>

<main>
  <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>

      <article>
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
      </article>

    <?php endwhile; ?>
  <?php endif; ?>
</main>

<?php get_footer(); ?>
</body>
</html>