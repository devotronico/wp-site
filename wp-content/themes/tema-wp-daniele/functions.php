<?php
/*
* NAVBAR BOOTSTRAP 4 
* Plugin URI:  https://github.com/wp-bootstrap/wp-bootstrap-navwalker
* Description: A custom WordPress nav walker class
* 	to implement the Bootstrap 4 navigation style in a custom theme using the WordPress built in menu manager.
* VIDEO GUIDA ->https://www.youtube.com/watch?v=t-AGjdMrtdA&list=PLillGF-RfqbaKe3TWtwDW8vYV2MHIFPEi&index=3
*/
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';



// theme support
function themeDan_theme_setup() {
	add_theme_support('post-thumbnails');

	// nav menu
	register_nav_menus( array(
	'primary' => __( 'Primary Menu', 'tema-wp-Daniele' ),	
	) );
		
	/*
	* Creare POST
	* la funzione 'add_theme_support' ci consentirà di poter pubblicare diverse tipologie di post
	* in admin->Articoli->Aggiungi Nuovo apparirà il tipo di articolo che vogliamo postare
	* Standard, Disgressione(aside), Galleria(gallery)
	*/
	add_theme_support('post-formats', array('aside', 'gallery'));

}
add_action('after_setup_theme', 'themeDan_theme_setup');


/* 
*	CARICARE IL FILE CSS
*	La funzione 'wp_enqueue_style' carica il file css che deve sovascrivere  gli altri stili
*	E' importante mettere il file css allo stesso livello del file index.php
*/
wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css',false,'1.1','all');


function register_styles() {

	wp_register_style('mobile', get_template_directory_uri().'/css/mobile.css', array(), '1.0', 'all');
	wp_register_style('desktop', get_template_directory_uri().'/css/desktop.css', array(), '1.0', 'all');

	wp_enqueue_style(wp_is_mobile() ? 'mobile' : 'desktop');
}
add_action('wp_enqueue_scripts', 'register_styles');


/*
* LUNGHEZZA CARATTERI DEI POST
* La funzione 'set_excerpt_length' consente di scegliere di quanti caratteri deve essere formata l antemprima dei post.
* richiamarla con la funzione 'the_excerpt()' in alternativa alla funzione 'the_content()'
*/
function set_excerpt_length(){
	return 35;
}
add_filter('excerpt_length', 'set_excerpt_length');



/*
* SIDEBAR / WIDGET
* https://codex.wordpress.org/Function_Reference/register_sidebar
* Wordpress Theme With Bootstrap [5] - Single Posts & Pages
* |->https://www.youtube.com/watch?v=CTeFU9GmSrI
*/
function themeDan_widgets_init() {

	/*
	* CREARE UN WIDGET
	* In Admin->Aspetto->Widget verrà visualizzato il widget creato qua
	*/
	register_sidebar(array(
		'name'  => 'Box1',
		'id'    => 'box1',
		'before_widget' => '<div class="p-3">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="font-italic">',
		'after_title'   => '</h4>'
	  ));
	  register_sidebar(array(
		'name'  => 'Box2',
		'id'    => 'box2',
		'before_widget' => '<div class="p-3">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="font-italic">',
		'after_title'   => '</h4>'
	  ));
	  register_sidebar(array(
		'name'  => 'Box3',
		'id'    => 'box3',
		'before_widget' => '<div class="p-3">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="font-italic">',
		'after_title'   => '</h4>'
	  ));

	  register_sidebar(array(
		'name'  => 'Box4',
		'id'    => 'box4',
		'before_widget' => '<div class="p-3">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="font-italic">',
		'after_title'   => '</h4>'
	  ));
}
add_action( 'widgets_init', 'themeDan_widgets_init' );



/*
* PAGINAZIONE BOOTSTRAP
* Register Custom Navigation Walker
*/
require_once('wp_bootstrap_pagination.php');

function customize_wp_bootstrap_pagination($args) {
    
    $args['previous_string'] = 'previous';
    $args['next_string'] = 'next';
    
    return $args;
}
add_filter('wp_bootstrap_pagination_defaults', 'customize_wp_bootstrap_pagination');






/*
* PERSONALIZZA TEMA IN ADMIN
* In Admin->Aspetto->Temi aggiunge nuove opzioni alla personalizzazione del proprio tema
* Per aggiungere le opzioni di personalizzazione andare in 'customizer.php'
*/
require get_template_directory().'/inc/customizer.php';





/* 
*	CARICARE IMMAGINI
*	Ci sono 2 modi per caricare le immagini con il tag <a>
*	metodo 1: <img class="immagine" src="<?php echo get_template_directory_uri(); ?>/cartella/file.jpg" alt="image">
*	metodo 2: <img class="immagine" src="<?php bloginfo('template_url'); ?>/cartella/file.jpg" alt="image">
*/




// <?php
// /*  Theme setup
// /* ------------------------------------ */
// if ( ! function_exists( 'miotema_setup' ) ) {
// 	function miotema_setup() {
// 		add_theme_support( "title-tag" );
// 		// Enable automatic feed links
// 		add_theme_support( 'automatic-feed-links' );
// 		// Enable featured image
// 		add_theme_support( 'post-thumbnails' );
// 		// Thumbnail sizes
// 		add_image_size( 'miotema_single', 800, 493, true ); //(cropped)
// 		add_image_size( 'miotema_big', 1400, 928, true ); 	//(cropped)
// 		// Custom menu areas
// 		register_nav_menus( array(
// 			'header' => esc_html__( 'Header', 'miotema' ),
// 		) );
// 		// Load theme languages
// 		load_theme_textdomain( 'miotema', get_template_directory().'/languages' );
// 	}
// }
// add_action( 'after_setup_theme', 'miotema_setup' );
// /*  Register sidebars
// /* ------------------------------------ */
// if ( ! function_exists( 'miotema_sidebars' ) ) {
// 	function miotema_sidebars()	{
// 		register_sidebar(array( 'name' => esc_html__( 'Primary', 'miotema' ),'id' => 'primary','description' => esc_html__( 'Normal full width sidebar.', 'miotema' ), 'before_widget' => '<div id="%1$s" class="widget %2$s">','after_widget' => '</div>','before_title' => '<h3>','after_title' => '</h3>'));
// 	}
// }
// add_action( 'widgets_init', 'miotema_sidebars' );
// /*  Include Styles and script
// /* ------------------------------------ */
// if ( ! function_exists( 'miotema_styles_scripts' ) ) {
// 	function miotema_style_scripts() {
// 		//wp_enqueue_script('jquery');
// 		wp_enqueue_script( 'miotema-scripts', get_template_directory_uri() . '/js/scripts.js', array( 'jquery' ),'', true );
// 		wp_enqueue_style( 'miotema-sourcesanspro','//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700');
// 		wp_enqueue_style( 'miotema-normalize', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.min.css');
// 		wp_enqueue_style( 'miotema', get_template_directory_uri().'/style.css');
// 	}
// }
// add_action( 'wp_enqueue_scripts', 'miotema_style_scripts' );
// /*  Oembed Responsive
// /* ------------------------------------ */
// add_filter( 'embed_oembed_html', 'miotema_oembed_filter', 10, 4 ) ;
// function miotema_oembed_filter($html, $url, $attr, $post_ID) {
// 	$return = '<figure class="video-container">'.$html.'</figure>';
// 	return $return;
// }