<?php
get_header();
?>
<!-- main content -->
<div class="container-fluid main-container">
  <div class="row">
    <div class="col-md-11 col-lg-10 col-xl-8 mx-auto py-2 px-1" id="main-content-column">
      <?php if(have_posts()) {
        while(have_posts()) { 
          the_post();
          the_content();
        }
      } ?>
<!--
      <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; ?>
      <?php endif; ?>
-->
    </div> <!-- col -->
  </div> <!-- row -->
</div>

<?php get_footer(); ?>
