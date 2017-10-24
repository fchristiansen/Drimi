<?php // custom functions.php template @ digwp.com


  // remueve adminbar en front
    add_filter( 'show_admin_bar', '__return_false' );


function iniciarTema(){

    // ACTIVA IMAGENES DESTACADAS
    add_theme_support( 'post-thumbnails' );


    // Activar Titulo
    add_theme_support( 'title-tag' );
    register_nav_menu( 'primary', __( 'Menú Principal', 'menu_principal' ) );
  }
  // Cuando ocurra 'after_setup_theme, invocar "iniciarTema"
  add_action( 'after_setup_theme', 'iniciarTema' );

// carga css
function theme_styles() {

    wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', array(),'1', 'screen');
    wp_enqueue_style('bootstrap-theme', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css', array(),'1', 'screen');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Lato:300,400,700', array(),'1', 'screen');

    wp_enqueue_style('fonts', get_template_directory_uri() . '/assets/css/fonts.css', array(), '1', 'screen' );
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '1', 'screen' );
    wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.css', array(), '1', 'screen' );
    wp_enqueue_style('owl', get_template_directory_uri() . '/assets/css/owl.carousel.css', array(), '1', 'screen' );
    wp_enqueue_style('owl-theme', get_template_directory_uri() . '/assets/css/owl.theme.default.css', array(), '1', 'screen' );
    wp_enqueue_style('hover', get_template_directory_uri() . '/assets/css/hover-min.css', array(), '1', 'screen' );
    wp_enqueue_style('component', get_template_directory_uri() . '/assets/css/component.css', array(), '1', 'screen' );
    wp_enqueue_style('minimal', get_template_directory_uri() . '/assets/css/minimal/minimal.css', array(), '1', 'screen' );
    wp_enqueue_style('style-drimi', get_template_directory_uri() . '/assets/css/custom.css', array(), '1', 'screen' );
}

// carga js
function jquery_cdn() {
   if (!is_admin()) {
        wp_deregister_script('jquery');
        wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js', true, '2.2.4');
        wp_enqueue_script('jquery');
   }
}


function theme_js(){
/*

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAfb8y5fLrqf0xiysVqZqPzqAghs6hKPu8" async defer></script>
    wp_enqueue_script('tether-js', 'http://maps.google.com/maps/api/js?sensor=false', array('jquery'),'', true);
*/
    wp_enqueue_script('bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'),'', true);
    wp_enqueue_script('workaround-js', get_template_directory_uri() . '/assets/js/ie10-viewport-bug-workaround.js', array('jquery'),'', true);
    wp_enqueue_script('owl-js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'),'2.2.1', true);
    wp_enqueue_script('classie-js', get_template_directory_uri() . '/assets/js/classie.js', array('jquery'),'2.2.1', true);
    wp_enqueue_script('uisearch-js', get_template_directory_uri() . '/assets/js/uisearch.js', array('jquery'),'2.2.1', true);
    wp_enqueue_script('icheck-js', get_template_directory_uri() . '/assets/js/icheck.js', array('jquery'),'2.2.1', true);
    wp_enqueue_script('tweenmax-js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js', array('jquery'),'', true);
    wp_enqueue_script('drimi-js', get_template_directory_uri() . '/assets/js/drimi.js', array('jquery'),'1', true);

}
  add_action('wp_enqueue_scripts', 'theme_styles');
  add_action('init', 'jquery_cdn');
  add_action('wp_enqueue_scripts', 'theme_js');


remove_action('welcome_panel', 'wp_welcome_panel');



// add feed links to header
if (function_exists('automatic_feed_links')) {
	automatic_feed_links();
} else {
	return;
}


// enable threaded comments
function enable_threaded_comments(){
	if (!is_admin()) {
		if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1))
			wp_enqueue_script('comment-reply');
		}
}
add_action('get_header', 'enable_threaded_comments');


// remove junk from head
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);


// add google analytics to footer
function add_google_analytics() {
	echo '<script src="http://www.google-analytics.com/ga.js" type="text/javascript"></script>';
	echo '<script type="text/javascript">';
	echo 'var pageTracker = _gat._getTracker("UA-XXXXX-X");';
	echo 'pageTracker._trackPageview();';
	echo '</script>';
}
add_action('wp_footer', 'add_google_analytics');


// custom excerpt length
function custom_excerpt_length($length) {
	return 20;
}
add_filter('excerpt_length', 'custom_excerpt_length');


// custom excerpt ellipses for 2.9+
function custom_excerpt_more($more) {
	return '...';
}
add_filter('excerpt_more', 'custom_excerpt_more');

/* custom excerpt ellipses for 2.8-
function custom_excerpt_more($excerpt) {
	return str_replace('[...]', '...', $excerpt);
}
add_filter('wp_trim_excerpt', 'custom_excerpt_more');
*/


// no more jumping for read more link
function no_more_jumping($post) {
	return '<a href="'.get_permalink($post->ID).'" class="read-more">'.'Continue Reading'.'</a>';
}
add_filter('excerpt_more', 'no_more_jumping');


// add a favicon to your
function blog_favicon() {
	echo '<link rel="Shortcut Icon" type="image/x-icon" href="'.get_bloginfo('wpurl').'/favicon.ico" />';
}
add_action('wp_head', 'blog_favicon');


// add a favicon for your admin
function admin_favicon() {
	echo '<link rel="Shortcut Icon" type="image/x-icon" href="'.get_bloginfo('stylesheet_directory').'/images/favicon.png" />';
}
add_action('admin_head', 'admin_favicon');


// custom admin login logo
function custom_login_logo() {
	echo '<style type="text/css">
	h1 a { background-image: url('.get_bloginfo('template_directory').'/images/custom-login-logo.png) !important; }
	</style>';
}
add_action('login_head', 'custom_login_logo');


// disable all widget areas
function disable_all_widgets($sidebars_widgets) {
	//if (is_home())
		$sidebars_widgets = array(false);
	return $sidebars_widgets;
}
add_filter('sidebars_widgets', 'disable_all_widgets');


// kill the admin nag
if (!current_user_can('edit_users')) {
	add_action('init', create_function('$a', "remove_action('init', 'wp_version_check');"), 2);
	add_filter('pre_option_update_core', create_function('$a', "return null;"));
}


// category id in body and post class
function category_id_class($classes) {
	global $post;
	foreach((get_the_category($post->ID)) as $category)
		$classes [] = 'cat-' . $category->cat_ID . '-id';
		return $classes;
}
add_filter('post_class', 'category_id_class');
add_filter('body_class', 'category_id_class');


// get the first category id
function get_first_category_ID() {
	$category = get_the_category();
	return $category[0]->cat_ID;
}

// disable all feeds
function fb_disable_feed() {
	wp_die(__('<h1>Feed not available, please visit our <a href="'.get_bloginfo('url').'">Home Page</a>!</h1>'));
}
add_action('do_feed',      'fb_disable_feed', 1);
add_action('do_feed_rdf',  'fb_disable_feed', 1);
add_action('do_feed_rss',  'fb_disable_feed', 1);
add_action('do_feed_rss2', 'fb_disable_feed', 1);
add_action('do_feed_atom', 'fb_disable_feed', 1);

// remove version info from head and feeds
function complete_version_removal() {
	return '';
}
add_filter('the_generator', 'complete_version_removal');

// customize admin footer text
function custom_admin_footer() {
	echo '<a href="http://example.com/">Website Design by Awesome Example</a>';
}
add_filter('admin_footer_text', 'custom_admin_footer');

// admin link for all settings
function all_settings_link() {
	add_options_page(__('All Settings'), __('All Settings'), 'administrator', 'options.php');
}
add_action('admin_menu', 'all_settings_link');

function oddeven_post_class ( $classes ) {
   global $current_class;
   $classes[] = $current_class;
   $current_class = ($current_class == 'odd') ? 'even' : 'odd';
   return $classes;
}
add_filter ( 'post_class' , 'oddeven_post_class' );
global $current_class;
$current_class = 'odd';

function wpb_imagelink_setup() {
	$image_set = get_option( 'image_default_link_type' );

	if ($image_set !== 'none') {
		update_option('image_default_link_type', 'none');
	}
}
add_action('admin_init', 'wpb_imagelink_setup', 10);

//para multiple  post_thumbnails
if (class_exists('MultiPostThumbnails')) {
            $types = array('post', 'mixtape');
            foreach($types as $type) {
                new MultiPostThumbnails(array(
                    'label' => 'Secondary Image',
                    'id' => 'secondary-image',
                    'post_type' => $type
                    )
                );
            }
        }
////////////////////////////////////




?>
