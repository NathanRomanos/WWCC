<div class="cv-postBody">
<?php
if (have_posts()) :
  while (have_posts()):
    the_post();
?>


<?php
    the_content();

  endwhile;
 else:
endif;

?>
</div>
