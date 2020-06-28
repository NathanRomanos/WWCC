<div id="sidebar-primary" class="sidebar">
  <?php if ( ! dynamic_sidebar( 'sidebar-primary' ) ) : ?>
  <?php endif; ?>
  <?php if ( is_active_sidebar( 'primary' ) ) : ?>
    <div id="sidebar-primary" class="sidebar">
      <?php dynamic_sidebar( 'primary' ); ?>
    </div>
  <?php endif; ?>

</div>
