<!-- Make object of args include post to show per page, post status, cpt type -->
<?php
  $args = array(
    'posts_per_page' => 5,
    'post_status' => 'publish',
    'post_type' => 'post'
  );
  $posts = get_posts( $args );
  foreach ( $posts as $post ) :
    setup_postdata( $post );
?>
<div>
    <!-- Feature image post show -->
  <?php if ( has_post_thumbnail() ) : ?>
    <div>
      <?php the_post_thumbnail(); ?>
    </div>
  <?php endif; ?>
  <!-- Show Post title with link -->
  <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  <!-- Show post Description -->
  <p><?php the_excerpt(); ?></p>
  <hr>
</div>
<?php endforeach; wp_reset_postdata(); ?>
