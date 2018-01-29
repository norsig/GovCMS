<?php
/*
Plugin Name: Proud Romulus
Plugin URI: http://proudcity.com/
Description: Integrates romulusapp.com with ProudCity
Version: 1.1.0
Author: ProudCity
Author URI: https://proudcity.com/
License: Affero GPL v3
*/

namespace Proud\Romulus;


class Romulus extends \ProudPlugin {


  function __construct() {
    parent::__construct( array(
      'textdomain'     => 'wp-proud-romulus',
      'plugin_path'    => __FILE__,
    ) );
  }

  function initialize() {
    //$forms = RGFormsModel::get_forms( 1, 'title' );
    // @todo: get from Romulus API (does it exist?)
    $options = [
      'ward-1', 'Ward 1',
      'ward-2', 'Ward 2',
      'ward-3', 'Ward 3',
      'ward-4', 'Ward 4',
      'ward-5', 'Ward 5',
    ];
    $default = 'ward-1';
    $this->settings = [
      'department' => [
        '#title' => 'Department',
        '#type' => 'select',
        '#default_value' => $default,
        '#to_js_settings' => false,
        '#options' => $options
      ],
    ];
  }


  /**
   * Determines if content empty, show widget, title ect?  
   *
   * @see self::widget()
   *
   * @param array $args     Widget arguments.
   * @param array $instance Saved values from database.
   */
  public function hasContent($args, &$instance) {
    return true;
  }

  /**
   * Front-end display of widget.
   *
   * @see WP_Widget::widget()
   *
   * @param array $args     Widget arguments.
   * @param array $instance Saved values from database.
   */
  public function printWidget( $args, $instance ) {
    extract($instance);
    $city = get_option('proud_romulus_city', 'demo-city-216');
    ?>
    <iframe src="https://romulusapp.com/contact/<?php print $city; ?>/<?php print $department; ?>"
            width="519"
            height="846"></iframe>
    <?php
  }


} // class


new Romulus;
