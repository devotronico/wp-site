<div class="blog-post">
    <h2 class="blog-post-title">
        <?php if(is_single()):?> 
        <?php echo get_the_title($ID); ?>
        <?php else:?>
        <a href="<?php the_permalink();?>"><?php the_title();?></a> <!-- mettiamo il link sul titolo -->
        <?php endif;?>
    </h2> 
    <p class="blog-post-meta"><?php the_time('F j, Y g:i a'); ?>&nbsp;by&nbsp; 
    <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a>
    </p> <!-- data, autore, ID -->
    <?php if(has_post_thumbnail()):?> <!-- se abbiamo caricato un immagine -->
        <div class="post-thumb">
            <?php the_post_thumbnail();?>
        </div>
    <?php endif;?>
    <?php if(is_single()):?> <!-- se siamo sulla pagina del post singolo -->
        <?php the_content();?> <!-- carichiamo tutto il contenuto del post -->
    <?php else:?>
        <?php the_excerpt();?> <!-- NON carichiamo tutto il contenuto del post -->
    <?php endif;?>
    <?php if(is_single()):?> <!-- se siamo sulla pagina del post singolo -->
        <?php comments_template();?> <!-- carichiamo i commenti -->
    <?php endif;?>
</div>


