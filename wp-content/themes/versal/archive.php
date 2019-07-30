<?php
/**
 * The template for displaying archive pages
 */

get_header(); ?>
    
<div class="container_alt">

<div id="core">

		<?php
				the_archive_title( '<h2 class="archiv"><span class="maintitle">', '</span></h2>' );
				the_archive_description( '<div class="archiv"><span class="subtitle">', '</span></div>' );
        ?>

	<div id="content" class="eightcol first">

          <div class="blogger">
                                        
			  <?php
			  
              if (have_posts()) :
			  
              $counter = 1; 
              while (have_posts()) : the_post();  if($counter < 2): 
					
                  get_template_part('/post-types/home-big');
                  
              else:
              
                  get_template_part('/post-types/home-small');
              
              endif;
			  $counter++;
			  endwhile; ?>
                    
          </div><!-- end blogger -->
            
          <div class="clearfix"></div>

          <div class="pagination"><?php the_posts_pagination(); ?></div>

          <?php else : ?>
  

              <div class="errorentry entry">
  
                  <h1 class="post entry-title" itemprop="headline"><?php esc_html_e('Nothing found here','versal');?></h1>
              
                  <h4><?php esc_html_e('Perhaps You will find something interesting from these lists...','versal');?></h4>
              
                  <div class="hrline"></div>
              
                  <?php get_template_part('inc/404-content');?>
              
              </div>
          
          
          </div><!-- end latest posts section-->
              
              
          <?php endif; ?>
    
    </div><!-- end #content -->
    
    
    <?php get_sidebar(); ?>
    
	<div class="clearfix"></div>
    
</div><!-- end #core -->

<div class="clearfix"></div>

<?php get_footer(); ?>