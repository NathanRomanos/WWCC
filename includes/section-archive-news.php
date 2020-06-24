<?php
if (have_posts()) :
  while (have_posts()):
    the_post();
  ?>

    <div class="cv-sampleContainer">

      <div class="cv-sampleHead">
        <h2> <?php the_title(); ?>   </h2>

        <div class="">
          <?php if(has_post_thumbnail()): ?>
            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="cv-sampleThumb">
          <?php endif; ?>
        </div>

        <div class="cv-sampleAttr">
          <p> <i class="fas fa-calendar-alt"></i> <?php  echo get_the_date('D, j'); echo '<sup>'; echo get_the_date('S'); echo '</sup>'; echo get_the_date(', F, Y');?></p>
          <p> <?php the_terms( $post->ID, 'topics', '<i class="fas fa-tags"></i> ', ', ', ' ' ); ?></p>
        </div>

      </div> <!-- end sample head -->

      <div class="cv-sampleBody">
        <?php
        the_excerpt();//cut of some portion of text
        ?>

        <a href="<?php the_permalink(); ?>" class="cv-sampleLink"> Read more </a>
      </div>

    </div>

  <?php endwhile;
 else:
endif;

?>
