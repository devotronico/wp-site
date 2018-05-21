<!-- 
Wordpress Theme With Bootstrap [5] - Single Posts & Pages
https://www.youtube.com/watch?v=CTeFU9GmSrI
-->
<?php get_header();?>

      <div class="container">
        <div class="row">
          <div class="col-sm-8 blog-main">
            <?php if(have_posts()):?>
            <?php the_post();?>
              <?php get_template_part('content', get_post_format());?>
            <?php else:?>
            <p><?php __('Il Post è vuoto');?></p>
            <?php endif;?>
          </div>
        <!-- SIDEBAR -->
        <?php get_sidebar(); ?>
          <!-- CLOSE SIDEBAR -->
        </div>
      </div>

<?php get_footer();?>