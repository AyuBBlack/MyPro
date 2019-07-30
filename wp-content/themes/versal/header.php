<?php
/**
 * The header for Lookout theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

     
<body <?php body_class(); ?>>

<div id="curtain" class="tranz">

	<div class="container">

		<?php 
        
        get_template_part('/inc/social');
        
        get_search_form();
        
        ?>
    
    </div>
    
    <a class='curtainclose rad' href="#" ><i class="far fa-times-circle"></i></a>
    
</div>

<div class="postbar <?php if ( is_active_sidebar( 'tmnf-sidebar' ) ) {} else { echo 'postbarNone ';};?>">
        
    <div id="header" class="clearfix" itemscope itemtype="http://schema.org/WPHeader">
    
    	<div class="head-bg-image"><img src="<?php esc_url(header_image()); ?>" height="<?php echo esc_attr(get_custom_header()->height); ?>" width="<?php echo esc_attr(get_custom_header()->width); ?>" alt="" /></div>
    
        <div class="container">
            
            <div id="titles">
                <?php versal_site_logo(); ?>
                <?php $description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
                		<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
    					<p class="site-description site-tagline"><?php bloginfo( 'description' ); ?></p>
					<?php endif; ?>
            </div><!-- end #titles  -->
        
        	<a class="searchOpen share-icon" href="#" ><i class="fas fa-share-alt"></i></a>
        
        	<a class="searchOpen" href="#" ><i class="fas fa-search"></i></a>
              
        </div><!-- end .container  -->
    
    	<a id="navtrigger" class="rad ribbon" href="#"><i class="fa fa-bars"></i></a>
    
    </div><!-- end #header  -->
    
    <nav id="navigation" class="wpm_boxshadow ghost" itemscope itemtype="http://schema.org/SiteNavigationElement"> 
    
        <?php get_template_part('/inc/navigation'); ?>
        
    </nav><!-- end #navigation  -->
    
	<div class="wrapper">