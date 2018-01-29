<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Benjamin
 */

get_header();

/**
 * get all the settings needed for the the template layout
 *
 * returns:
 * $template
 * $main_width
 * $hide_content
 * $sidebar_position
 *
 */
extract( benjamin_template_settings() );

/**
 * the 404 settings
 *
 * returns:
 * $content
 * $pid
 * $header_page
 *
 */
extract( benjamin_get_404_settings() );

if( !$hide_content ):
?>

<section id="primary" class="usa-grid usa-section">
    <?php
    if($sidebar_position == 'left'):
        benjamin_get_sidebar($template, $sidebar_position);
    endif;
    ?>

  <div class="<?php echo $main_width; ?>">
        <?php

            if($content == 'page' && $pid):

                $page = get_page($pid);
                echo $page->post_content;
            else :
                echo '<p>' . esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'benjamin' ) . '</p>';

                get_search_form();

                echo '<br>';
                echo '<br>';
                echo '<br>';

    			the_widget( 'Benjamin_Widget_Pages', array('title'=>'Pages') );
            endif;
		?>
  </div>

  <?php
  if($sidebar_position == 'right'):
      benjamin_get_sidebar($template, $sidebar_position);
  endif;
  ?>
</section>

<?php
endif;
get_footer();
