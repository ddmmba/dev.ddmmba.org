<?php
// Before removing this file, please verify the PHP ini setting `auto_prepend_file` does not point to this.

if (file_exists('/home/ddmmba/dev.ddmmba.org/wp-content/plugins/wordfence/waf/bootstrap.php')) {
	define("WFWAF_LOG_PATH", '/home/ddmmba/dev.ddmmba.org/wp-content/wflogs/');
	include_once '/home/ddmmba/dev.ddmmba.org/wp-content/plugins/wordfence/waf/bootstrap.php';
}
?>