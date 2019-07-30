<?php
/**
 * Template part for displaying posts in magazine layout (mosaic)
 */
?>

          	<div <?php post_class('item tranz'); ?>>
  				
                <?php versal_meta_cat();?>
            
                <?php echo versal_icon();?>
            
            	<?php if (function_exists('wp_review_show_total')) wp_review_show_total(); ?>
							
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('versal_small',array('class' => 'tranz standard grayscale grayscale-fade'));  ?>
                </a>
                        
    
            	<div class="item_inn tranz wpm_gradient">
                
                	<?php versal_meta_date();?>
        
                    <h3><a class="link link--forsure" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                
                </div><!-- end .item_inn -->
        
            </div>