<?php
/**
 * The template for displaying content of the single post
 */
?>

<div <?php post_class('item normal tranz p-border'); ?>>

    
    <?php if ( has_post_thumbnail()) : ?>
    
        <div class="entryhead rad" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
            
            <a href="<?php the_permalink(); ?>">
            
            	<?php the_post_thumbnail('versal_classic',array('class' => 'standard grayscale grayscale-fade'));  ?>
            
            </a>
            
            <?php versal_meta_counter() ?>
        
        </div><!-- end .entryhead -->
 
    <?php endif; ?>
              
    <div class="clearfix"></div>
    
    <div class="item_inn tranz p-border">
                             
        <div class="entry" itemprop="text">
              
            <?php 
            
                the_content(); 
				
                echo '<div class="post-pagination">';
                wp_link_pages( array( 'before' => '<div class="page-link">', 'after' => '</div>',
				'link_before' => '<span>', 'link_after' => '</span>', ) );
				wp_link_pages(array(
					'before' => '<p>',
					'after' => '</p>',
					'next_or_number' => 'next_and_number', # activate parameter overloading
					'nextpagelink' => esc_html__('Next','versal'),
					'previouspagelink' => esc_html__('Previous','versal'),
					'pagelink' => '%',
					'echo' => 1 )
				);
				echo '</div>';
            
            ?>
            
            <div class="clearfix"></div>
            
        </div><!-- end .entry -->
        
            <?php 
				
                get_template_part('/single-info');
                
                comments_template(); 
                
            ?>
        
	</div><!-- end .item_inn -->
      
</div>