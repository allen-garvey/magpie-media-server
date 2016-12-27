<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title><?= htmlentities(SITE_TITLE); ?></title>
        <meta name="description" content="Plex Media Server"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <style><?php include(STYLES_PATH.'style.css'); ?></style>
    </head>
    <body>
        <div class="container">
            <h1><?= htmlentities(SITE_TITLE); ?></h1>
            <ul>
                <?php foreach($context['media_directory_listing'] as $mediaListing): ?>
                    <li>
                        <?php if(is_string($mediaListing)): ?>
                            <a href="<?= MEDIA_URL.urlencode($mediaListing); ?>">
                                <?= htmlentities($mediaListing); ?>
                            </a>
                        <?php else: ?>
                           <h4><?= htmlentities($mediaListing['name']); ?></h4>
                           <ul>
                            	<?php foreach($mediaListing['files'] as $file): ?>
                                	<li> 
                                	    <a href="<?= MEDIA_URL.htmlentities($file); ?>">
                                        	<?= htmlentities(basename($file)); ?>
                                    	</a>
                                	</li>
                            	<?php endforeach; ?>
                           </ul>
                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </body>
</html>