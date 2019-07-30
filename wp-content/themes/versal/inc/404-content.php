<?php
/**
 * Template part for displaying 404 additional info
 */
?>

        <ul><?php $archive_query = new WP_Query('showposts=1000');
while ($archive_query->have_posts()) : $archive_query->the_post(); ?>
            <li style="margin-bottom:10px">
                <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?>

                </a>
            </li>

            <?php endwhile; wp_reset_postdata(); ?>
        </ul>      

        <div class="clearfix"></div>