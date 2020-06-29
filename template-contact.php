<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>


<div class="cv-pageContainer">

  <?php
  if (have_posts()) :
    while (have_posts()):
      the_post();

      the_content();

    endwhile;
   else:
  endif;
  ?>

  <!--Section: Contact v.2-->
<section class="mb-4">

    <!--Section description-->

    <div class="row">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form" action="../wp-content/themes/WWCC/mail.php" method="POST">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="name" name="name" class="form-control">
                            <label for="name" class="">Your name</label>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="email" name="email" class="form-control">
                            <label for="email" class="">Your email</label>
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <input type="text" id="subject" name="subject" class="form-control">
                            <label for="subject" class="">Subject</label>
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                            <label for="message">Your message</label>
                        </div>

                    </div>
                </div>
                <!--Grid row-->

            </form>

            <div class="text-center text-md-left">
                <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Send</a>
            </div>
            <div class="status"></div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0">
                <li><i class="fas fa-map-marker-alt fa-2x"></i>
                    <p><a href="https://www.google.com/maps/place/Buddle+Road,+Trentham,+Upper+Hutt+5018/@-41.1359331,175.0518398,17z/data=!3m1!4b1!4m5!3m4!1s0x6d40ac57df3f5653:0xe238f04837bb20ec!8m2!3d-41.1359372!4d175.0540285" target="_blank">10 Buddle Road, Trentham, Wgn, 5019, NZ</a></p>
                </li>

                <li><i class="fas fa-phone mt-4 fa-2x"></i>
                    <p>(+64) 021 614 821</p>
                </li>

                <li><i class="fas fa-phone mt-4 fa-2x"></i>
                    <p>(04) 528 5861</p>
                </li>

                <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                    <p>mjromanos@hotmail.com</p>
                </li>
            </ul>
        </div>
        <!--Grid column-->

    </div>

</section>
<!--Section: Contact v.2-->

</div> <!-- end page container -->

<?php get_footer(); ?>
