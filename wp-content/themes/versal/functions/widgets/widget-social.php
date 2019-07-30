<?php
/*---------------------------------------------------------------------------------*/
/* Social Networks widget */
/*---------------------------------------------------------------------------------*/
class versal_social_networks extends WP_Widget {

	public function __construct() {
		$widget_ops = array('description' => esc_html__('This is Social Networks widget.','versal') );
		parent::__construct('versal_sc_ntw', esc_html__('Vergo - Social Networks','versal'),$widget_ops);      
	}

   function widget($args, $instance) {  
    extract( $args );
   	$title = $instance['title'];
	?>
		<?php echo ($before_widget); ?>
        <?php if ($title) { echo($before_title) . esc_html($title) . $after_title; } ?>
        	<?php get_template_part('/inc/social'); ?>
            <div style="clear: both;"></div> 
		<?php echo($after_widget); ?>   
   <?php
   }

   function update($new_instance, $old_instance) {                
       return $new_instance;
   }

   function form($instance) {  
      	$defaults = array('title' => '');
		$instance = wp_parse_args((array) $instance, $defaults);      
   
       $title = esc_attr($instance['title']);

       ?>
       <p>
	   	   <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title:','versal'); ?></label>
	       <input type="text" name="<?php echo esc_attr($this->get_field_name('title')); ?>"  value="<?php echo esc_attr($title); ?>" class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" />
       </p>
      <?php
   }
} 

register_widget('versal_social_networks');
?>