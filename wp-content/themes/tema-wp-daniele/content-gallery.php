<div class="blog-post post-gallery">
    <?php if(is_singular()):?> <!-- se siamo sulla pagina del post singolo -->
        <?php the_title();?> <!-- NON mettiamo il link sul titolo -->
    <?php else:?>
        <a href="<?php the_permalink();?>"><?php the_title();?></a> <!-- mettiamo il link sul titolo -->
    <?php endif;?>
    <?php the_content();?>
</div>