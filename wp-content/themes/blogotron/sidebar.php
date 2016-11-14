<?php
/**
 * The sidebar containing the main widget area, displays on posts and pages.
 *
 * If no active widgets in this sidebar, these widgets will be shown by default.
 *
 * @subpackage Blogotron
 * @since      Blogotron 1.4
 */
?>
<div id="sidebar" role="complementary">
	<?php if ( is_active_sidebar( 'main-sidebar' ) ) :
		dynamic_sidebar( 'main-sidebar' );
	else :
		$args = array(
			'before_widget' => '<aside class="widget %s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		);
		$instance = array();
		the_widget( 'WP_Widget_Search', $instance, $args );
		the_widget( 'WP_Widget_Recent_Posts', $instance, $args );
		the_widget( 'WP_Widget_Recent_Comments', $instance, $args );
		the_widget( 'WP_Widget_Archives', $instance, $args );
		the_widget( 'WP_Widget_Categories', $instance, $args );
	endif // if( is_active_sidebar( 'main-sidebar' ) ) ?>
</div><!-- #sidebar -->
