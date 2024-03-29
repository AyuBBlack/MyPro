<?php
/**
 * The template for displaying the footer
 */
?>

    </div><!-- /.container -->
    
        <div class="footer-icons ghost p-border"><?php get_template_part('/inc/social'); ?></div>
    
        <div id="footer">
        
            <div class="container woocommerce"> 
            
                <?php get_template_part('/inc/bottombox');?>
                
            </div>
                <div class="clearfix"></div>
                
            <div id="copyright" style="text-align: center;">
            	<span>
					copyright © 2019 Элиханов Расул
				</span>
                
                <div class="container">
                    
                    <?php if ( function_exists('has_nav_menu') && has_nav_menu('bottom-menu') ) {wp_nav_menu( array( 'depth' => 1, 'sort_column' => 'menu_order', 'container' => 'ul', 'menu_class' => 'bottom-menu', 'menu_id' => '' , 'theme_location' => 'bottom-menu') );}  ?>
                    
                   <!-- <div id="footer-text" class="site-info">
                        <?php do_action( 'versal_footer_text' ); ?> 
                    </div><!-- .site-info -->
                </div> 
            
            </div>
                
        </div><!-- /#footer  -->
        
    </div><!-- /.wrapper  -->

</div><!-- /.postbar  -->

    
<div class="scrollTo_top rad ribbon" style="display: block">

    <a title="<?php esc_html_e('Scroll To Top','versal');?>" class="rad" href="#">
    
    	<i class="fa fa-chevron-up"></i> 
        
    </a>
    
</div>


<?php wp_footer(); ?>

</body>
</html>