<?php
/**
 * Template part for displaying posts in blog layout
 */
?>
          	<div <?php post_class('item blog-item tranz  p-border'); ?>>
  				
                <?php versal_meta_cat();?>
     
                <div class="entryhead">
                    
                   	<?php echo versal_icon();?>
                
                	<div class="icon-rating tranz">
            
                    	<?php if (function_exists('wp_review_show_total')) wp_review_show_total(); ?>
                    
                    </div>
    
					<?php if ( has_post_thumbnail()){ ?>
                    
                        <div class="imgwrap">
							
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('versal_blog',array('class' => 'tranz standard grayscale grayscale-fade'));  ?>
                            </a>
                            
                            <?php versal_meta_counter() ?>
                        
                        </div>
    
                    <?php } else { } ?> 
                
                </div><!-- end .entryhead -->
    
            	<div class="item_inn tranz p-border">
        
                    <h2 class="posttitle"><a class="link link--forsure" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    
                    <?php versal_meta_author(); versal_meta_date(); ?>
                    
                    <div class="clearfix"></div>
                    
					<?php the_excerpt(); ?>
                
                </div><!-- end .item_inn -->
        
            </div>