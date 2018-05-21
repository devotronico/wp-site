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
        <h3><?php echo get_the_title($ID); ?></h3>
        <?php if(has_post_thumbnail()):?> <!-- se abbiamo caricato un immagine -->
        <div class="post-thumb">
              <?php the_post_thumbnail();?>
        </div>
        <?php endif;?>
        <?php the_content();?> <!-- carichiamo tutto il contenuto del post -->
        <p class="blog-post-meta"><?php the_time('F j, Y g:i a'); ?>&nbsp;by&nbsp;<?php the_author(); ?></p>
      <?php else:?>
        <p><?php __('La Pagina è vuota');?></p>
      <?php endif;?>
    </div>
  <!-- SIDEBAR -->
  <?php get_sidebar(); ?>
    <!-- CLOSE SIDEBAR -->
  </div>
</div>

<?php get_footer();?>