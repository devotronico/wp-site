<?php if(is_front_page()) : ?>




<!-- WIDGET -->
<div class="container-fluid front-sidebar ">
    <div class="row text-center">
        <div class="col-md-3 boxes"> <!-- SIDEBAR -->
            <?php if ( is_active_sidebar( 'box1' ) ) { ?>
            <?php dynamic_sidebar( 'box1' ); ?>
            <?php } ?>
        </div>  <!-- CLOSE SIDEBAR -->
        <div class="col-md-3 boxes"> <!-- SIDEBAR -->
            <?php if ( is_active_sidebar( 'box2' ) ) { ?>
            <?php dynamic_sidebar( 'box2' ); ?>
            <?php } ?>
        </div>  <!-- CLOSE SIDEBAR -->

        <div class="col-md-3 boxes"> <!-- SIDEBAR -->
            <?php if ( is_active_sidebar( 'box3' ) ) { ?>
            <?php dynamic_sidebar( 'box3' ); ?>
            <?php } ?>
        </div>  <!-- CLOSE SIDEBAR -->
        <div class="col-md-3 boxes"> <!-- SIDEBAR -->
            <?php if ( is_active_sidebar( 'box4' ) ) { ?>
            <?php dynamic_sidebar( 'box4' ); ?>
            <?php } ?>
        </div>  <!-- CLOSE SIDEBAR -->
    </div> 
</div> 



<?php else : ?>






<aside class="col-md-3 page-sidebar ">

          <div class="p-3 mb-3 bg-light rounded">
            <h4 class="font-italic">About</h4>
            <p class="mb-0">Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
          </div>

        
            <?php if ( is_active_sidebar( 'box1' ) ) { ?>
            <?php dynamic_sidebar( 'box1' ); ?>
            <?php } ?>
          

           
            <?php if ( is_active_sidebar( 'box2' ) ) { ?>
            <?php dynamic_sidebar( 'box2' ); ?>
            <?php } ?>
      

          
            <?php if ( is_active_sidebar( 'box3' ) ) { ?>
            <?php dynamic_sidebar( 'box3' ); ?>
            <?php } ?>
    

           
            <?php if ( is_active_sidebar( 'box4' ) ) { ?>
            <?php dynamic_sidebar( 'box4' ); ?>
            <?php } ?>
       

          <div class="p-3">
            <h4 class="font-italic">Elsewhere</h4>
            <ol class="list-unstyled">
              <li><a href="#">GitHub</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Facebook</a></li>
            </ol>
          </div>
        </aside><!-- /.blog-sidebar -->
<?php endif; ?>