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
                <?php foreach($context['media_files'] as $mediaFile): ?>
                    <li>
                        <a href="<?= MEDIA_URL.urlencode($mediaFile); ?>">
                            <?= htmlentities($mediaFile); ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </body>
</html>