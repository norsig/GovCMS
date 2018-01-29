<?php
/*
Plugin Name: Romulus Contact Form
Plugin URI: http://romuluscrm.com/
Description: Integrates Romulus CRM contact form into wordpress
Version: 1.0.0
Author: Romulus CRM
Author URI: https://romuluscrm.com/
License: MIT
*/

function romulus_contact_form_shortcode_function( $attrs ) {
  if ( ! empty( $attrs['url'] ) ) {
    $url = $attrs['url'];
    return '<iframe src="'.$url.'"
              width="520"
              height="1590"
              frameborder="0"
              style="overflow: auto; padding: 14px; margin: 12px; width: 98%; max-width: 900px; background-color: #fff; border: none">
      </iframe>';
  }
}

add_shortcode('romulus_contact_form', 'romulus_contact_form_shortcode_function');

// Creating the widget 
class romulus_contact_form_widget extends WP_Widget {

  function __construct() {
    parent::__construct(
    // Base ID of your widget
    'wpb_widget', 

    // Widget name will appear in UI
    __('Romulus Contact Form', 'romulus_contact_form'), 

    // Widget description
    array( 'description' => __( 'Display a Romulus CRM contact form', 'romulus_contact_form' ), ) 
    );
  }

  // Display the widget
  public function widget( $args, $instance ) {   
    echo romulus_contact_form_shortcode_function( $instance );
  }
      
  // Widget form 
  public function form( $instance ) {
    $url = isset( $instance[ 'url' ] ) ? $instance[ 'url' ] : '';
    ?>
    <p>
    <label for="<?php echo $this->get_field_id( 'url' ); ?>"><?php _e( 'Romulus Public Form URL:' ); ?></label> 
    <input class="widefat" id="<?php echo $this->get_field_id( 'url' ); ?>" name="<?php echo $this->get_field_name( 'url' ); ?>" type="text" value="<?php echo esc_attr( $url ); ?>" />
    </p>
    <p><?php echo __('1. Login to Romulus <br/> 2. Go to Department Profile <br/>3. Copy your Public form url', 'romulus_contact_form'); ?><p>
      <a href="<?php echo plugins_url( 'assets/screenshot-1.png', __FILE__ ); ?>" target="_blank">
        <img 
          src="<?php echo plugins_url( 'assets/screenshot-1.png', __FILE__ ); ?>" 
          alt="<?php echo __('Click to see larger version. Screenshot of Romulus interface.', 'romulus_contact_form'); ?>" 
          style="max-width:100%;height:auto;width:650px;"
          />
      </a>
    </p>
    <?
  <?php 
  }
    
  // Widget form submit
  public function update( $new_instance, $old_instance ) {
    $instance = array();
    $instance['url'] = ( ! empty( $new_instance['url'] ) ) ? strip_tags( $new_instance['url'] ) : '';
    return $instance;
  }
} // Class wpb_widget ends here

// Register and load the widget
function romulus_contact_form_load_widget() {
  register_widget( 'romulus_contact_form_widget' );
}
add_action( 'widgets_init', 'romulus_contact_form_load_widget' );