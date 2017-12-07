<?php 

require(VIEWS_PATH.'head.php'); 

(function(string $baseUrl, array $directoryListing){
    require(VIEWS_PATH.'directory_list.php');
})($context['url_base'], $context['directory_listing']);

require(VIEWS_PATH.'footer.php');


