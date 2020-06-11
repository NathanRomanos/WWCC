<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>


<div class="container">
      <h1> <?php the_title(); ?>   </h1>
      <div class="row">

        <div class="col">
          <label for="vegetable">Vegetable Name</label>
          <br>
          <input type="text" name="vegetable" value="" placeholder="vegetable">
          <br>
          <br>
          <br>
          <label for="password">Vegetable Password</label>
          <br>
          <input type="password" name="password" value="" placeholder="password">


        </div>

        <div class="col">
              <?php get_template_part('includes/section','content'); ?>
        </div>

      </div>



</div>

<?php get_footer(); ?>
