<?php 
require_once('../inc/config.php');
require_once(CONTROLLERS_PATH.'file_controller.php');

$context = [];

$context['media_directory_listing'] = FileController::fileListingFor(MEDIA_PATH);
//var_dump($context['media_directory_listing']);

include(VIEWS_PATH.'homepage.php');






