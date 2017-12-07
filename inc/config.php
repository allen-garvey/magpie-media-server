<?php 
//paths
define('ROOT_PATH', dirname(__FILE__, 2).'/');
define('INC_PATH', ROOT_PATH.'inc/');
define('VIEWS_PATH', INC_PATH.'views/');
define('CONTROLLERS_PATH', INC_PATH.'controllers/');
define('STYLES_PATH', ROOT_PATH.'public_html/styles/');
define('MEDIA_PATH', ROOT_PATH.'public_html/media/');


require_once(INC_PATH.'environment_setup.php');

//urls
define('BASE_URL', '/');
define('STYLES_URL', BASE_URL.'styles/');
define('SCRIPTS_URL', BASE_URL.'scripts/');
define('MEDIA_URL', BASE_URL.'media/');


//videos
define('VIDEOS_DIR_NAME', 'videos');
define('VIDEOS_PATH', MEDIA_PATH.VIDEOS_DIR_NAME.'/');
define('VIDEOS_INDEX_URL', BASE_URL.VIDEOS_DIR_NAME.'/');
define('VIDEOS_URL', MEDIA_URL.VIDEOS_DIR_NAME.'/');

//books
define('BOOKS_DIR_NAME', 'books');
define('BOOKS_PATH', MEDIA_PATH.BOOKS_DIR_NAME.'/');
define('BOOKS_INDEX_URL', BASE_URL.BOOKS_DIR_NAME.'/');
define('BOOKS_URL', MEDIA_URL.BOOKS_DIR_NAME.'/');


define('SITE_TITLE', 'Magpie Media Server');


