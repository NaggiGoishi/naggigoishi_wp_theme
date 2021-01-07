<?php get_header(); ?>

<?php
  $args = array(
    "numberposts" => -1
  );
  $posts = get_posts( $args );
?>

<div class="top">
  <h1 class="title">Naggi Goishi</h1>
</div>

<div class="blog-section">
  <h2 class="blog-title">Blog</h2>

  <div class="blog-container">
    <?php if( !empty( $posts ) ) {
      foreach ( $posts as $post ) {
        setup_postdata( $post ); 
    ?>

    <div class="blog">
      <a href="<?php the_permalink(); ?>">
        <img src="<?php echo get_the_post_thumbnail_url(); ?>">
        <p><?php the_title(); ?></p>
      </a>

      <div class="sub-info">
        <p>#<?php the_category( " #" ); ?></p>
        <p><?php the_date(); ?></p>
      </div>
    </div>

    <?php }} ?>    
  </div>
</div>

<?php get_footer(); ?>
