<div id="sidebar-primary" class="sidebar">
  <?php if ( ! dynamic_sidebar( 'sidebar-primary' ) ) : ?>
      <aside id="search" class="widget cv-search widget_search">
         <?php get_search_form(); ?>
      </aside>
  <?php endif; ?>
  <?php if ( is_active_sidebar( 'primary' ) ) : ?>
      <?php dynamic_sidebar( 'primary' ); ?>
  <?php else : ?>
      <!-- Time to add some widgets! -->
  <?php endif; ?>

</div>
