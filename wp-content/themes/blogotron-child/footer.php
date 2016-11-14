<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #content-wrapper and #page-wrapper div elements.
 *
 * @subpackage Blogotron
 * @since      Blogotron 1.4
 */
?>
</div><!-- #content-wrapper -->
<div id="footer-wrapper">
	<footer id="main-footer" role="contentinfo">
		<div id="copyright">&copy; <?php printf( '%1$s %2$s', date_i18n( 'Y' ), get_bloginfo( 'name' ) ) ?></div>
	</footer><!-- #main-footer -->
</div><!-- #footer-wrapper -->
</div><!-- #page-wrapper -->
<?php wp_footer(); ?>
</body>
</html>
