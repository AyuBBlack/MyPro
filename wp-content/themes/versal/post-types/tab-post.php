<?php
/**
 * Template part for displaying posts in featured widget
 */
?>

<div class="p-border tab-post-big">

	<?php if ( has_post_thumbnail()) : ?>
    
        <div class="imgwrap">
        
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
            
              <?php the_post_thumbnail( 'versal_small',array('class' => "grayscale grayscale-fade")); ?>
              
            </a>
        
        </div>
         
    <?php endif; ?>
    
    <div class="tab-post-inn">		
	
	
		<?php versal_meta_date(); ?>
        
        <div class="clearfix"></div>
        
    	<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
      
		<?php the_excerpt();?>
    
    </div>

</div>