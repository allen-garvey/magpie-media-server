<?php 
//paths
define('ROOT_PATH', dirname(__FILE__, 2).'/');
define('INC_PATH', ROOT_PATH.'inc/');
define('VIEWS_PATH', INC_PATH.'views/');
define('STYLES_PATH', ROOT_PATH.'public_html/styles/');


require_once(INC_PATH.'environment_setup.php');

define('BASE_URL', '/');


define('STYLES_URL', BASE_URL.'styles/');
define('SCRIPTS_URL', BASE_URL.'scripts/');


//media files
define('MEDIA_PATH', ROOT_PATH.'public_html/media/');
define('MEDIA_URL', BASE_URL.'media/');


define('SITE_TITLE', 'Magpie Media Server');


