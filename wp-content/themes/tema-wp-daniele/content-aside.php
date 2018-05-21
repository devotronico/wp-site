<div class="blog-post post-aside">
    <div class="card card-body bg-light">
    <?php if(is_singular()):?> <!-- se siamo sulla pagina del post singolo -->
        <?php the_title();?> <!-- NON mettiamo il link sul titolo -->
    <?php else:?>
        <a href="<?php the_permalink();?>"><?php the_title();?></a> <!-- mettiamo il link sul titolo -->
    <?php endif;?>
        <small><?php the_author();?>@<?php the_date();?></small>
        <?php the_content();?>
    </div>
</div>