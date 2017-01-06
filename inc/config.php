<?php 
//paths
define('ROOT_PATH', dirname(__FILE__, 2).'/');
define('INC_PATH', ROOT_PATH.'inc/');
define('VIEWS_PATH', INC_PATH.'views/');
define('CONTROLLERS_PATH', INC_PATH.'controllers/');
define('STYLES_PATH', ROOT_PATH.'public_html/styles/');


require_once(INC_PATH.'environment_setup.php');

//urls
define('BASE_URL', '/');
define('STYLES_URL', BASE_URL.'styles/');
define('SCRIPTS_URL', BASE_URL.'scripts/');


//videos
define('VIDEOS_DIR_NAME', 'videos');
define('VIDEOS_PATH', ROOT_PATH.'public_html/media/'.VIDEOS_DIR_NAME.'/');
define('VIDEOS_INDEX_URL', BASE_URL.VIDEOS_DIR_NAME.'/');
define('VIDEOS_URL', BASE_URL.'media/'.VIDEOS_DIR_NAME.'/');

//books
define('BOOKS_DIR_NAME', 'books');
define('BOOKS_PATH', ROOT_PATH.'public_html/media/'.BOOKS_DIR_NAME.'/');
define('BOOKS_INDEX_URL', BASE_URL.BOOKS_DIR_NAME.'/');
define('BOOKS_URL', BASE_URL.'media/'.BOOKS_DIR_NAME.'/');


define('SITE_TITLE', 'Magpie Media Server');


