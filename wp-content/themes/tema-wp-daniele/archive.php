<?php get_header();?>

    <div class="container">
      <h1 class="page-type">Archivio</h1>
      <div class="row">
        <div class="col-sm-8 blog-main">
          <?php if(have_posts()):?>
            <?php while(have_posts()): the_post();?>
            <?php get_template_part('content', get_post_format());?>
            <?php endwhile;?>
          <?php else:?>
            <p><?php __('Non ci sono Post');?></p>
          <?php endif;?>
        </div>
   <!-- SIDEBAR -->
   <?php get_sidebar(); ?>
          <!-- CLOSE SIDEBAR -->
      </div>
    </div>

<?php get_footer();?>