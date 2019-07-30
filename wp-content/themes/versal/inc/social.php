<?php
/**
 * Template part for displaying social icon section
 */
?>
<ul class="social-menu">

<?php if(get_theme_mod('versal_facebook')) { ?>
<li class="sprite-facebook">
	<a title="<?php esc_attr_e('Facebook','versal');?>" href="<?php echo esc_url(get_theme_mod('versal_facebook'));?>"><i class="fab fa-facebook-f"></i><span><?php esc_html_e('Facebook','versal');?></span></a>
</li><?php } ?>

<?php if (get_theme_mod('versal_twitter') )  { ?>
<li class="sprite-twitter">
	<a title="<?php esc_attr_e('Twitter','versal');?>" href="<?php echo esc_url(get_theme_mod('versal_twitter'));?>"><i class="fab fa-twitter"></i><span><?php esc_html_e('Twitter','versal');?></span></a>
</li><?php } ?>

<?php if (get_theme_mod('versal_google') )  { ?>
<li class="sprite-google">
	<a title="<?php esc_attr_e('Google+','versal');?>" href="<?php echo esc_url(get_theme_mod('versal_google'));?>"><i class="fab fa-google-plus-g"></i><span><?php esc_html_e('Google+','versal');?></span></a>
</li><?php } ?>

<?php if (get_theme_mod('versal_instagram') )  { ?>
<li class="sprite-instagram">
	<a title="<?php esc_attr_e('Instagram','versal');?>" href="<?php echo esc_url(get_theme_mod('versal_instagram'));?>"><i class="fab fa-instagram"></i><span><?php esc_html_e('Instagram','versal');?></span></a>
</li><?php } ?>

<?php if (get_theme_mod('versal_pinterest') )  { ?>
<li class="sprite-pinterest">
	<a title="<?php esc_attr_e('Pinterest','versal');?>" href="<?php echo esc_url(get_theme_mod('versal_pinterest'));?>"><i class="fab fa-pinterest-square"></i><span><?php esc_html_e('Pinterest','versal');?></span></a>
</li><?php } ?>

<?php if (get_theme_mod('versal_youtube') )  { ?>
<li class="sprite-youtube">
	<a title="<?php esc_attr_e('You Tube','versal');?>" href="<?php echo esc_url(get_theme_mod('versal_youtube'));?>"><i class="fab fa-youtube"></i><span><?php esc_html_e('You Tube','versal');?></span></a>
</li><?php } ?>

<?php if (get_theme_mod('versal_linkedin') )  { ?>
<li class="sprite-linkedin">
	<a title="<?php esc_attr_e('LinkedIn','versal');?>" href="<?php echo esc_url(get_theme_mod('versal_linkedin'));?>"><i class="fab fa-linkedin-in"></i><span><?php esc_html_e('LinkedIn','versal');?></span></a>
</li><?php } ?>

</ul>