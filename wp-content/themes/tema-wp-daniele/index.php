<?php get_header();?>

     
<main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">
            <?php if(have_posts()):?>  <!-- POSTS -->
              <?php while(have_posts()): the_post();?>
              <?php get_template_part('content', get_post_format());?> <!-- carica il file content.php -->
              <?php endwhile;?>
            <?php else:?>
              <p><?php __('Non ci sono Post');?></p>
            <?php endif;?>  <!-- CLOSE POSTS -->
          </div>
          
        <!-- SIDEBAR -->
        <?php get_sidebar(); ?>
      

        </div><!-- /.row -->
        <?php
  if ( function_exists('wp_bootstrap_pagination') )
    wp_bootstrap_pagination();
?>
        
</main><!-- /.container -->


 




<?php get_footer();?>