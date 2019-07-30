<?php
/**
 * The template for displaying search results pages
 */

get_header(); ?>
    
<div class="container builder woocommerce">

<div id="core">

    <h2 class="archiv p-border"><span class="maintitle"><?php echo esc_attr($s); ?></span>
    <span class="subtitle"><?php esc_html_e('Search Results','versal');?> </span></h2>

	<div id="content" class="eightcol first">

		<div class="blogger">
                                    
			  <?php 
              
              if (have_posts()) :
              
              $counter = 1; 
              while (have_posts()) : the_post(); if($counter < 2): 
					
                  get_template_part('/post-types/home-big');
                  
              else:
              
                  get_template_part('/post-types/home-small');
              
              endif;
			  $counter++;
			  endwhile; ?>
                    
		</div><!-- end blogger -->
            
    	<div class="clearfix"></div>
    
    	<div class="pagination"><?php the_posts_pagination(); ?></div>
    
    </div><!-- end #content -->
    
    
    <?php get_sidebar(); ?>
    
	<?php else : ?>

    <div class="container">
    
        <div class="errorentry entry">

            <h2 itemprop="headline"><?php esc_html_e('Sorry nothing found here','versal');?></h2>
            
            <h5><?php esc_html_e('Take a moment and do a search below','versal');?></h5>
            
            <?php get_search_form(); ?>
        
            <h5><?php esc_html_e('or perhaps you will find something interesting from this list...','versal');?></h5>
        
            <div class="hrline"></div>
        
            <?php get_template_part('inc/404-content');?>
        
        </div>
        
    </div></div></div>
        
    <?php endif; ?>
    
	<div class="clearfix"></div>
    
</div><!-- end #core -->
    
<div class="clearfix"></div>

<?php get_footer(); ?>