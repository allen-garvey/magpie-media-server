<?php 
require_once('../inc/config.php');

$context = [];

$context['media_files'] = array_filter(scandir(MEDIA_PATH), function($file) { return is_file(MEDIA_PATH.$file) && !preg_match('`^\\.`', $file); });

include(VIEWS_PATH.'homepage.php');






