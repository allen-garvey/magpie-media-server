<ul>
    <?php foreach($directoryListing as $directoryEntry): ?>
        <li>
            <?php if(is_string($directoryEntry)): ?>
                <a href="<?= $baseUrl.rawurlencode($directoryEntry); ?>">
                    <?= htmlentities($directoryEntry); ?>
                </a>
            <?php else: ?>
               <h4><?= htmlentities($directoryEntry['name']); ?></h4>
               
               <?php
                (function(string $baseUrl, array $directoryListing){
                    require(VIEWS_PATH.'directory_list.php');
                })($baseUrl, $directoryEntry['files']);
               ?>
            <?php endif; ?>
        </li>
    <?php endforeach; ?>
</ul>