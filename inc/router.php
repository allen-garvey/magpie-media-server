<?php

require_once(CONTROLLERS_PATH.'file_controller.php');

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

//homepage route
if(preg_match('`^/$`', $uri)){
	include(VIEWS_PATH.'homepage.php');
	die();
}

//index page (directory listing) for videos or books
if(preg_match('`^/('.VIDEOS_DIR_NAME.'|'.BOOKS_DIR_NAME. ')/?$`', $uri)){
	if(preg_match('`/'.VIDEOS_DIR_NAME.'/?`', $uri)){
		$modelPath = VIDEOS_PATH;
		$modelUrlBase = VIDEOS_URL;
	}
	else{
		$modelPath = BOOKS_PATH;
		$modelUrlBase = BOOKS_URL;
	}
	$context = [];

	$context['directory_listing'] = FileController::fileListingFor($modelPath);
	$context['url_base'] = $modelUrlBase;

	include(VIEWS_PATH.'directory_listing.php');
	die();
}

//Route not found
http_response_code(404);
echo 'Route not found';