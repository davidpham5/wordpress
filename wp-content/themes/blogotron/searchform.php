<?php
/**
 * The template for Search Form.
 *
 * @subpackage Blogotron
 * @since      Blogotron 1.4
 */
?>
<form role="search" method="get" class="searchform" action="<?php echo home_url( '/' ); ?>">
	<div class="searchform-content">
		<input type="search" name="s" id="s" class="custom-search" placeholder="<?php esc_attr_e( 'Enter search keyword', 'blogotron' ); ?>" value="<?php echo get_search_query(); ?>" />
		<input type="submit" value="<?php _e( 'Search', 'blogotron' ) ?>" />
	</div><!-- .searchform-content -->
</form>
