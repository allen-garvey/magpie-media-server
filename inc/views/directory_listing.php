<?php include(VIEWS_PATH.'head.php'); ?>

<ul>
    <?php foreach($context['directory_listing'] as $directoryEntry): ?>
        <li>
            <?php if(is_string($directoryEntry)): ?>
                <a href="<?= $context['url_base'].rawurlencode($directoryEntry); ?>">
                    <?= htmlentities($directoryEntry); ?>
                </a>
            <?php else: ?>
               <h4><?= htmlentities($directoryEntry['name']); ?></h4>
               <ul>
                	<?php foreach($directoryEntry['files'] as $file): ?>
                    	<li> 
                    	    <a href="<?= $context['url_base'].rawurlencode($file); ?>">
                            	<?= htmlentities(basename($file)); ?>
                        	</a>
                    	</li>
                	<?php endforeach; ?>
               </ul>
            <?php endif; ?>
        </li>
    <?php endforeach; ?>
</ul>

<?php include(VIEWS_PATH.'footer.php'); ?>