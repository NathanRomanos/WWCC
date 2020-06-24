<?php
  if (have_posts()) :
    while (have_posts()):
      the_post();
?>

      <div class="cv-postContainer">
        <div class="cv-postImg">
          <?php if(has_post_thumbnail()): ?>
            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="cv-postImg-img">
          <?php endif; ?>
        </div>
        <div class="cv-postAttr">
          <p> <i class="fas fa-calendar-alt"></i> <?php  echo get_the_date('D, j'); echo '<sup>'; echo get_the_date('S'); echo '</sup>'; echo get_the_date(', F, Y');?></p>
          <p> <?php the_terms( $post->ID, 'topics', '<i class="fas fa-tags"></i> ', ', ', ' ' ); ?></p>
        </div>
        <div class="cv-postBody">
          <?php the_content(); ?>
          <a onclick="history.back()" class="cv-postBack"><i class="fas fa-long-arrow-alt-left"></i> Back</a>
        </div>
      </div>

<?php
    endwhile;
   else:
  endif;

?>
