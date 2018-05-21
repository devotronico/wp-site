<!doctype html>
<html <?php language_attributes();?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php bloginfo('Il mio primo tema');?>">
    <meta name="author" content="Daniele Manzi">
    <link rel="icon" href="../../../../favicon.ico">
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('Il mio primo tema') : wp_title(); ?></title>
       <!-- Bootstrap core CSS -->
    <link href=" <?php bloginfo('template_url');?>/css/bootstrap.min.css" rel="stylesheet">
    <!-- il CSS è caricato in function.php -->
    <!-- <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>
    <?php wp_head();?>
    </head>
  
  <body <?php body_class();?>><!-- DA controllare body_class -->

  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-md navbar-dark bg-dark" role="navigation">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">Navbar</a>
            <?php
            wp_nav_menu( array(
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker()
        ) );
            ?>
    </div>
  </nav>



<?php if(is_front_page()) : ?> <!-- FRONT PAGE -->

  <main role="main">

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <style>
      .showcase{
      background:url(<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url').'/img/showcase.jpg'); ?>) no-repeat center center;
          }
    </style>


    <div class="jumbotron jumbotron-fluid showcase">
      <div class="container">
            <h1 class="display-3"><?php echo get_theme_mod('showcase_heading', 'Custom Bootstrap Wordpress Theme'); ?></h1>
            <p><?php echo get_theme_mod('showcase_text', 'Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam'); ?></p>
            <hr class="my-4">
            <p><a href="<?php echo get_theme_mod('btn_url', 'http://test.com'); ?>" class="btn btn-primary btn-lg"><?php echo get_theme_mod('btn_text', 'Get Started'); ?></a></p>
        </div>
    </div>


<?php else : ?> <!-- NON FRONT PAGE -->
<!-- JUMBOTRON -->
<div class="container">
  <div class="jumbotron small">
    <h1 class="display-3"><?php bloginfo('name');?></h1>
    <p><?php bloginfo('description');?></p>
    <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
  </div>
</div> <!-- /container -->
<!-- COLONNE -->
<div class="container">
  <div class="row">
    <div class="col-md-4">
      <h2>Heading 1</h2>
      <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
      <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
    </div>
    <div class="col-md-4">
      <h2>Heading 2</h2>
      <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
      <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
    </div>
    <div class="col-md-4">
      <h2>Heading 3</h2>
      <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
      <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
    </div>
  </div>
  <hr>
</div> <!-- /container -->

<?php endif; ?>



  

    