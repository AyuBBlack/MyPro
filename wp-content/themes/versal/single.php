<?php
/**
 * The template for displaying all single posts and attachments
 */

get_header();

if (have_posts()) : while (have_posts()) : the_post();
?>

<?php if(has_post_format('quote'))  { ?>
    <div class="container">
    <?php get_template_part('/post-types/post-quote-post' );} else {?>  
    
      
<div itemscope itemtype="http://schema.org/NewsArticle">
<meta itemscope itemprop="mainEntityOfPage"  content=""  itemType="https://schema.org/WebPage" itemid="<?php the_permalink(); ?>"/>

<div id="core" class="container_alt">
   
    <div class="postbar">
    
    	<div class="post-head">

            <h1 class="entry-title" itemprop="headline"><span itemprop="name"><?php the_title(); ?></span></h1>
            
            <?php if ( has_excerpt( $post->ID ) ) {the_excerpt();}?>
        
            <div class="meta-single p-border">
                
                <?php versal_meta_author(); versal_meta_date(); versal_meta_cat();?>
                
            </div>
	
    	</div>

        <div id="content" class="eightcol first">
            
            <?php get_template_part('/single-content' ); ?>
               
        </div><!-- end #content -->
    
        <?php get_sidebar(); ?>
   
    </div><!-- end .postbar -->
    
</div> 

<?php }?>
        
        <?php endwhile; else: ?>
        
            <p><?php esc_html_e('Sorry, no posts matched your criteria','versal');?>.</p>
        
        <?php endif; ?>
   
<?php get_footer(); ?>