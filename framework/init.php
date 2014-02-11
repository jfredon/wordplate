<?php

/**
 * Register the Composer autoloader.
 */
require get_template_directory().'/vendor/autoload.php';

/**
 * Define Constants.
 */
define('TEMPLATE_DIR', get_template_directory());
define('TEMPLATE_URI', get_template_directory_uri());

define('AUTHOR', 'Vincent Klaiber');
define('AUTHOR_URL', 'http://vinkla.com');

define('FOOTER_TEXT', 'Thank you for creating with <a href="'.AUTHOR_URL.'">'.AUTHOR.'</a>.');

define('LOGIN_IMAGE_PATH', TEMPLATE_DIR.'/images/admin-login-logo.png');
define('LOGIN_HEADER_URL', get_site_url());

define('LOGIN_ERROR_MESSAGE', 'Whoops! Looks like you missed something there. Have another go.');

define('TINYMCE_BLOCKFORMATS', implode(',', ['p', 'h2', 'h3']));
define('TINYMCE_DISABLED', implode(',', [
	'strikethrough',
	'underline',
	'forecolor',
	'justifyfull'
]));

/**
 * Load Framework Components.
 */
require TEMPLATE_DIR.'/framework/acf.php';
require TEMPLATE_DIR.'/framework/functions.php';
require TEMPLATE_DIR.'/framework/helpers.php';
require TEMPLATE_DIR.'/framework/remove.php';
require TEMPLATE_DIR.'/framework/server.php';
require TEMPLATE_DIR.'/framework/security.php';
