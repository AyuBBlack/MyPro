<?php
/**
 * Contains methods for customizing the theme customization screen.
 * 
 * @link http://codex.wordpress.org/Theme_Customization_API
 * @since MyTheme 1.0
 */
class versal_Customize {
   /**
    * This hooks into 'customize_register' (available as of WP 3.4) and allows
    * you to add new sections and controls to the Theme Customize screen.
    * 
    * Note: To enable instant preview, we have to actually write a bit of custom
    * javascript. See live_preview() for more.
    *  
    * @see add_action('customize_register',$func)
    * @param \WP_Customize_Manager $wp_customize
    * @link http://ottopress.com/2012/how-to-leverage-the-theme-customizer-in-your-own-themes/
    * @since MyTheme 1.0
    */
   public static function register ( $wp_customize ) {



// 1. BODY //////////////

$wp_customize->add_section( 'versal_body_options', 
   array(
	  'title' => esc_html__( 'Primary (Body) Options', 'versal' ), //Visible title of section
	  'priority' => 99, //Determines what order this appears in
	  'capability' => 'edit_theme_options', //Capability needed to tweak
	  'description' => esc_html__( 'Allows you to customize some primary settings for theme.', 'versal'),
   ) 
);//this is section

 
		
		
		///------///
		$wp_customize->add_setting( 'ghost_body',
		   array(
			  'default' => '#fff',
			  'type' => 'theme_mod',
			  'transport' => 'postMessage',
			  'sanitize_callback' => 'sanitize_hex_color',
		   ) 
		);  
		$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize,
		   'versal_ghost_body',
		   array(
			  'label' => esc_html__( 'Container (ghost) Background Color', 'versal' ),
			  'section' => 'versal_body_options',
			  'settings' => 'ghost_body'
		  )
		) );	  
		
		
		///------///
		$wp_customize->add_setting( 'border_body',
		   array(
			  'default' => '#eee',
			  'type' => 'theme_mod',
			  'transport' => 'postMessage',
			  'sanitize_callback' => 'sanitize_hex_color',
		   ) 
		);  
		$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize,
		   'versal_border_body',
		   array(
			  'label' => esc_html__( 'Border Color', 'versal' ),
			  'section' => 'versal_body_options',
			  'settings' => 'border_body'
		  )
		) );
		

		///------///
		$wp_customize->add_setting( 'accent_body',
		   array(
			  'default' => '#f24110',
			  'type' => 'theme_mod',
			  'transport' => 'postMessage',
			  'sanitize_callback' => 'sanitize_hex_color',
		   ) 
		);  
		$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize,
		   'versal_accent_body',
		   array(
			  'label' => esc_html__( 'Accent Color: Background', 'versal' ),
			  'section' => 'versal_body_options',
			  'settings' => 'accent_body'
		  )
		) ); 
		
		
		///------///
		$wp_customize->add_setting( 'accent_body_text',
		   array(
			  'default' => '#fff',
			  'type' => 'theme_mod',
			  'transport' => 'postMessage',
			  'sanitize_callback' => 'sanitize_hex_color',
		   ) 
		);  
		$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize,
		   'versal_accent_body_text',
		   array(
			  'label' => esc_html__( 'Accent Color: Text', 'versal' ),
			  'section' => 'versal_body_options',
			  'settings' => 'accent_body_text'
		  )
		) );


		
		///------///
		$wp_customize->add_setting( 'link_body',
		   array(
			  'default' => '#000',
			  'type' => 'theme_mod',
			  'transport' => 'postMessage',
			  'sanitize_callback' => 'sanitize_hex_color',
		   ) 
		);  
		$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize,
		   'versal_link_body',
		   array(
			  'label' => esc_html__( 'Link Color', 'versal' ),
			  'section' => 'versal_body_options',
			  'settings' => 'link_body'
		  )
		) ); 
		
  
		///------///
		$wp_customize->add_setting( 'link_body_hover',
		   array(
			  'default' => '#687077',
			  'type' => 'theme_mod',
			  'transport' => 'postMessage',
			  'sanitize_callback' => 'sanitize_hex_color',
		   ) 
		);  
		$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize,
		   'versal_link_body_hover',
		   array(
			  'label' => esc_html__( 'Link Color: Hover', 'versal' ),
			  'section' => 'versal_body_options',
			  'settings' => 'link_body_hover'
		  )
		) ); 
		
  
		///------///
		$wp_customize->add_setting( 'link_entry',
		   array(
			  'default' => '#f24110',
			  'type' => 'theme_mod',
			  'transport' => 'postMessage',
			  'sanitize_callback' => 'sanitize_hex_color',
		   ) 
		);  
		$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize,
		   'versal_link_entry',
		   array(
			  'label' => esc_html__( 'Entry Link Color', 'versal' ),
			  'section' => 'versal_body_options',
			  'settings' => 'link_entry'
		  )
		) ); 
		
				
  
		///------///
		$wp_customize->add_setting( 'link_entry_hover',
		   array(
			  'default' => '#00d15e',
			  'type' => 'theme_mod',
			  'transport' => 'postMessage',
			  'sanitize_callback' => 'sanitize_hex_color',
		   ) 
		);  
		$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize,
		   'versal_link_entry_hover',
		   array(
			  'label' => esc_html__( 'Link Color: Hover', 'versal' ),
			  'section' => 'versal_body_options',
			  'settings' => 'link_entry_hover'
		  )
		) ); 



// 2. HEADER //////////////

$wp_customize->add_section( 'versal_header_options', 
   array(
	  'title' => esc_html__( 'Header Options', 'versal' ), //Visible title of section
	  'priority' => 99, //Determines what order this appears in
	  'capability' => 'edit_theme_options', //Capability needed to tweak
   ) 
);// this is section
	  
	  
      
      $wp_customize->add_setting( 'bg_header',
         array(
            'default' => '#182434',
            'type' => 'theme_mod',
            'transport' => 'postMessage',
			'sanitize_callback' => 'sanitize_hex_color',
         ) 
      );  
      $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize,'versal_bg_header',
         array(
            'label' => esc_html__( 'Header Background Color', 'versal' ),
            'section' => 'versal_header_options',
            'settings' => 'bg_header',
         )
      ) );
	  
	  
      ///------///
      $wp_customize->add_setting( 'nav_header',
         array(
            'default' => '#000',
            'type' => 'theme_mod',
            'transport' => 'postMessage',
			'sanitize_callback' => 'sanitize_hex_color',
         ) 
      );  
      $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize,
	  	'versal_nav_header',
         array(
            'label' => esc_html__( 'Header Navigation Color', 'versal' ),
            'section' => 'versal_header_options',
            'settings' => 'nav_header',
         )
      ) );
	  
	  
	  ///------///
      $wp_customize->add_setting( 'link_header',
         array(
            'default' => '#fff',
            'type' => 'theme_mod',
            'transport' => 'postMessage',
			'sanitize_callback' => 'sanitize_hex_color',
         ) 
      );  
      $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize,
         'versal_link_header',
         array(
            'label' => esc_html__( 'Header Link Color', 'versal' ),
            'section' => 'versal_header_options',
            'settings' => 'link_header'
		)
      ) ); 
	  
	  
	  ///------///
      $wp_customize->add_setting( 'text_header',
         array(
            'default' => '#8c8c8c',
            'type' => 'theme_mod',
            'transport' => 'postMessage',
			'sanitize_callback' => 'sanitize_hex_color',
         ) 
      );  
      $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize,
         'versal_text_header',
         array(
            'label' => esc_html__( 'Header Text Color', 'versal' ),
            'section' => 'versal_header_options',
            'settings' => 'text_header'
		)
      ) ); 
	  
	  
	  
	  ///------///
      $wp_customize->add_setting( 'accent_header',
         array(
            'default' => '#f24110',
            'type' => 'theme_mod',
            'transport' => 'postMessage',
			'sanitize_callback' => 'sanitize_hex_color',
         ) 
      );  
      $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize,
         'versal_accent_header',
         array(
            'label' => esc_html__( 'Header Accent Color: Background', 'versal' ),
            'section' => 'versal_header_options',
            'settings' => 'accent_header'
		)
      ) ); 
	  
	  
	  ///------///
      $wp_customize->add_setting( 'accent_header_text',
         array(
            'default' => '#fff',
            'type' => 'theme_mod',
            'transport' => 'postMessage',
			'sanitize_callback' => 'sanitize_hex_color',
         ) 
      );  
      $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize,
         'versal_accent_header_text',
         array(
            'label' => esc_html__( 'Header Accent Color: Text', 'versal' ),
            'section' => 'versal_header_options',
            'settings' => 'accent_header_text'
		)
      ) );
	  
	  

// END 2. HEADER //////////////






// 3. FOOTER //////////////

$wp_customize->add_section( 'versal_footer_options', 
   array(
	  'title' => esc_html__( 'Footer Options', 'versal' ), //Visible title of section
	  'priority' => 99, //Determines what order this appears in
	  'capability' => 'edit_theme_options', //Capability needed to tweak
   ) 
);// this is section
	  
	  
      
      $wp_customize->add_setting( 'bg_footer',
         array(
            'default' => '#182434',
            'type' => 'theme_mod',
            'transport' => 'postMessage',
			'sanitize_callback' => 'sanitize_hex_color',
         ) 
      );  
      $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize,'versal_bg_footer',
         array(
            'label' => esc_html__( 'Footer Background Color', 'versal' ),
            'section' => 'versal_footer_options',
            'settings' => 'bg_footer',
         )
      ) );
	  
	  
	  ///------///
      $wp_customize->add_setting( 'link_footer',
         array(
            'default' => '#aaa8b7',
            'type' => 'theme_mod',
            'transport' => 'postMessage',
			'sanitize_callback' => 'sanitize_hex_color',
         ) 
      );  
      $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize,
         'versal_link_footer',
         array(
            'label' => esc_html__( 'Footer Link Color', 'versal' ),
            'section' => 'versal_footer_options',
            'settings' => 'link_footer'
		)
      ) ); 
	  
	  
	  ///------///
      $wp_customize->add_setting( 'text_footer',
         array(
            'default' => '#d3d0e2',
            'type' => 'theme_mod',
            'transport' => 'postMessage',
			'sanitize_callback' => 'sanitize_hex_color',
         ) 
      );  
      $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize,
         'versal_text_footer',
         array(
            'label' => esc_html__( 'Footer Text Color', 'versal' ),
            'section' => 'versal_footer_options',
            'settings' => 'text_footer'
		)
      ) ); 
	  
	  
	  ///------///
      $wp_customize->add_setting( 'border_footer',
         array(
            'default' => '#1e2f49',
            'type' => 'theme_mod',
            'transport' => 'postMessage',
			'sanitize_callback' => 'sanitize_hex_color',
         ) 
      );  
      $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize,
         'versal_border_footer',
         array(
            'label' => esc_html__( 'Footer Border Color', 'versal' ),
            'section' => 'versal_footer_options',
            'settings' => 'border_footer'
		)
      ) ); 
	  

// END 3. FOOTER //////////////





// SOCIAL NETWORKS SECTION //////////////
$wp_customize->add_section(
    'versal_social_networks',
    array(
        'title'     => esc_html__( 'Social Networks', 'versal' ),
        'priority'  => 201,
        'description' => esc_html__( 'Enter full URLs (http:// including)','versal' ),
    )
);// this is section

	
	
	
	$wp_customize->add_setting( 'versal_facebook',array('sanitize_callback' => 'versal_sanitize_url'));
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'versal_facebook',
		    array(
		        'label'    => esc_html__( 'Facebook URL', 'versal' ),
		        'section'  => 'versal_social_networks',
		        'settings' => 'versal_facebook',
		        'type'     => 'text'
		    )
	    )
	);
	
	$wp_customize->add_setting( 'versal_twitter',array('sanitize_callback' => 'versal_sanitize_url'));
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'versal_twitter',
		    array(
		        'label'    => esc_html__( 'Twitter URL', 'versal' ),
		        'section'  => 'versal_social_networks',
		        'settings' => 'versal_twitter',
		        'type'     => 'text'
		    )
	    )
	);
	
	$wp_customize->add_setting( 'versal_instagram',array('sanitize_callback' => 'versal_sanitize_url'));
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'versal_instagram',
		    array(
		        'label'    => esc_html__( 'Instagram URL', 'versal' ),
		        'section'  => 'versal_social_networks',
		        'settings' => 'versal_instagram',
		        'type'     => 'text'
		    )
	    )
	);
	
	$wp_customize->add_setting( 'versal_pinterest',array('sanitize_callback' => 'versal_sanitize_url'));
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'versal_pinterest',
		    array(
		        'label'    => esc_html__( 'Pinterest URL', 'versal' ),
		        'section'  => 'versal_social_networks',
		        'settings' => 'versal_pinterest',
		        'type'     => 'text'
		    )
	    )
	);
	
	$wp_customize->add_setting( 'versal_linkedin',array('sanitize_callback' => 'versal_sanitize_url'));
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'versal_linkedin',
		    array(
		        'label'    => esc_html__( 'LinkedIn URL', 'versal' ),
		        'section'  => 'versal_social_networks',
		        'settings' => 'versal_linkedin',
		        'type'     => 'text'
		    )
	    )
	);
	
	$wp_customize->add_setting( 'versal_google',array('sanitize_callback' => 'versal_sanitize_url'));
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'versal_google',
		    array(
		        'label'    => esc_html__( 'Google + URL', 'versal' ),
		        'section'  => 'versal_social_networks',
		        'settings' => 'versal_google',
		        'type'     => 'text'
		    )
	    )
	);
	
	$wp_customize->add_setting( 'versal_youtube',array('sanitize_callback' => 'versal_sanitize_url'));
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'versal_youtube',
		    array(
		        'label'    => esc_html__( 'You Tube URL', 'versal' ),
		        'section'  => 'versal_social_networks',
		        'settings' => 'versal_youtube',
		        'type'     => 'text'
		    )
	    )
	);
	
	

// END SOCIAL NETWORKS  //////////////





// FEATURED SECTION //////////////

$wp_customize->add_section(
    'versal_category',
    array(
        'title'     => esc_html__( 'Mosaic Featured Section', 'versal' ),
        'priority'  => 202
    )
);// this is section

	
	///------///
	$wp_customize->add_setting(
		'versal_slider_category',array('sanitize_callback' => 'versal_slug_sanitize_cats_dropdown')
	);
	
	$wp_customize->add_control(
		new versal_category_control(
			$wp_customize,
			'versal_slider_category',
			array(
				'label'    => esc_html__( 'Category', 'versal' ),
				'settings' => 'versal_slider_category',
				'section'  => 'versal_category'
			)
		)
	);
 


// END FEATURED SECTION //////////////








	 
      
      //4. We can also change built-in settings by modifying properties. For instance, let's make some stuff use live preview JS...
		// Abort if selective refresh is not available.
		if ( ! isset( $wp_customize->selective_refresh ) ) {
				return;
		}
		// Add postMessage support for site title and description.
		$wp_customize->get_setting( 'blogname' )->transport            = 'postMessage';
		$wp_customize->get_setting( 'blogdescription' )->transport     = 'postMessage';
		// Selective refreshes.
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
				'selector'        => '#titles a',
				'render_callback' => 'versal_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
				'selector'        => '.site-tagline',
				'render_callback' => 'versal_customize_partial_blogdescription',
		) );
	  
      $wp_customize->get_setting( 'background_color' )->transport = 'postMessage';
   }

   /**
    * This will output the custom WordPress settings to the live theme's WP head.
    * 
    * Used by hook: 'wp_head'
    * 
    * @see add_action('wp_head',$func)
    * @since MyTheme 1.0
    */
   public static function versal_header_output() {
      ?>
      <!--Customizer CSS--> 
      <style type="text/css">
	  
	  
           <?php 
		   self::versal_generate_css('.ghost,a.page-numbers,.nav li ul', 'background-color', 'ghost_body'); 
		   self::versal_generate_css('.p-border,.widgetable li,.social-menu a,.taggs a', 'border-color', 'border_body');
		   self::versal_generate_css('.ribbon,.format-quote .item_inn,.page-numbers.current,li.current a,.flex-direction-nav a,#submit,h2.widget:after,h2.block:after', 'background-color', 'accent_body');
		   self::versal_generate_css('.wpm_pop_posts i,.reply a', 'color', 'accent_body');
		   self::versal_generate_css('.ribbon,.ribbon a,.ribbon p,a.ribbon,.format-quote,.format-quote a,.page-numbers.current,li.current a,#submit', 'color', 'accent_body_text');
		   self::versal_generate_css('a', 'color', 'link_body'); 
		   self::versal_generate_css('a:hover', 'color', 'link_body_hover'); 
		   self::versal_generate_css('.entry p a', 'color', 'link_entry');
		   self::versal_generate_css('.entry p a', 'border-color', 'link_entry');
		   self::versal_generate_css('.entry p a:hover', 'color', 'link_entry_hover');
		   self::versal_generate_css('.entry p a:hover', 'border-color', 'link_entry_hover');
		   ?>
	  
           <?php 
		   self::versal_generate_css('#header,#curtain', 'background-color', 'bg_header');
		   self::versal_generate_css('.nav li a,li.current-menu-item li a', 'color', 'nav_header');
		   self::versal_generate_css('#titles a,#curtain a,#curtain input.s', 'color', 'link_header'); 
		   self::versal_generate_css('#titles p', 'color', 'text_header');
		   self::versal_generate_css('#header .searchOpen', 'background-color', 'accent_header');
		   self::versal_generate_css('.nav li.current-menu-item a,.nav li a:hover', 'color', 'accent_header');
		   self::versal_generate_css('#header .searchOpen', 'color', 'accent_header_text');
		   ?> 
		   
		   <?php 
		   self::versal_generate_css('#footer', 'background-color', 'bg_footer');
		   self::versal_generate_css('#footer a', 'color', 'link_footer'); 
		   self::versal_generate_css('#footer,#footer p,#footer input,#footer h2', 'color', 'text_footer');
		   self::versal_generate_css('#footer,#footer .p-border,#copyright', 'border-color', 'border_footer');
		   ?> 
		   
		   
           <?php self::versal_generate_css('body', 'background-color', 'background_color', '#'); ?> 
      </style> 
      <!--/Customizer CSS-->
      <?php
   }
   
   /**
    * This outputs the javascript needed to automate the live settings preview.
    * Also keep in mind that this function isn't necessary unless your settings 
    * are using 'transport'=>'postMessage' instead of the default 'transport'
    * => 'refresh'
    * 
    * Used by hook: 'customize_preview_init'
    * 
    * @see add_action('customize_preview_init',$func)
    */
   public static function versal_live_preview() {
      wp_enqueue_script( 
           'versal-themecustomizer', // Give the script a unique ID
           get_template_directory_uri() . '/functions/assets/js/theme-customizer.js', // Define the path to the JS file
           array(  'jquery', 'customize-preview' ), // Define dependencies
           '', // Define a version (optional) 
           true // Specify whether to put in footer (leave this true)
      );
   }

    /**
     * This will generate a line of CSS for use in header output. If the setting
     * ($mod_name) has no defined value, the CSS will not be output.
     * 
     * @uses get_theme_mod()
     * @param string $selector CSS selector
     * @param string $style The name of the CSS *property* to modify
     * @param string $mod_name The name of the 'theme_mod' option to fetch
     * @param string $prefix Optional. Anything that needs to be output before the CSS property
     * @param string $postfix Optional. Anything that needs to be output after the CSS property
     * @param bool $echo Optional. Whether to print directly to the page (default: true).
     * @return string Returns a single line of CSS with selectors and a property.
     * @since MyTheme 1.0
     */
    public static function versal_generate_css( $selector, $style, $mod_name, $prefix='', $postfix='', $echo=true ) {
      $return = '';
      $mod = get_theme_mod($mod_name);
      if ( ! empty( $mod ) ) {
         $return = sprintf('%s { %s:%s; }',
            $selector,
            $style,
            $prefix.$mod.$postfix
         );
         if ( $echo ) {
            echo esc_html( $return );
         }
      }
      return esc_html($return);
    }
}

// Setup the Theme Customizer settings and controls...
add_action( 'customize_register' , array( 'versal_Customize' , 'register' ) );

// Output custom CSS to live site
add_action( 'wp_head' , array( 'versal_Customize' , 'versal_header_output' ) );

// Enqueue live preview javascript in Theme Customizer admin screen
add_action( 'customize_preview_init' , array( 'versal_Customize' , 'versal_live_preview' ) );

//Sanitize URL
function versal_sanitize_url( $url ) {
	return esc_url_raw( trim($url) );
}

//Sanitize cats dropdown
function versal_slug_map_cats( $item ) {
        return $item->term_taxonomy_id;
};

function versal_slug_sanitize_cats_dropdown( $input, $setting ) {
        $cats = array_map( 'versal_slug_map_cats', get_terms( 'category' ) );

        return ( in_array( (int) $input, $cats, TRUE ) ? $input : $setting->default );
}

//Render the site title for the selective refresh partial
function versal_customize_partial_blogname() {
	bloginfo( 'name' );
}

//Render the site tagline for the selective refresh partial
function versal_customize_partial_blogdescription() {
	bloginfo( 'description' );
}