<?php
// Before removing this file, please verify the PHP ini setting `auto_prepend_file` does not point to this.

if (file_exists('/Users/davidpham/Projects/wordpress/wp-content/plugins/wordfence/waf/bootstrap.php')) {
	define("WFWAF_LOG_PATH", '/Users/davidpham/Projects/wordpress/wp-content/wflogs/');
	include_once '/Users/davidpham/Projects/wordpress/wp-content/plugins/wordfence/waf/bootstrap.php';
}
?>