<?php get_header(); ?>

<article>

  <div class="thumbnail">
    <img src="<?php echo get_the_post_thumbnail_url(); ?>">
  </div>

  <h1 class="article-title"><?php the_title(); ?></h1>
  <?php the_content(); ?>

</article>

<?php get_footer(); ?>
