<?php
/** @var xPDOTransport $transport */
/** @var array $options */
/** @var modX $modx */
if ($transport->xpdo) {
    $modx =& $transport->xpdo;

    $dev = MODX_BASE_PATH . 'Extras/StartKit/';
    /** @var xPDOCacheManager $cache */
    $cache = $modx->getCacheManager();
    if (file_exists($dev) && $cache) {
        if (!is_link($dev . 'assets/components/startkit')) {
            $cache->deleteTree(
                $dev . 'assets/components/startkit/',
                ['deleteTop' => true, 'skipDirs' => false, 'extensions' => []]
            );
            symlink(MODX_ASSETS_PATH . 'components/startkit/', $dev . 'assets/components/startkit');
        }
        if (!is_link($dev . 'core/components/startkit')) {
            $cache->deleteTree(
                $dev . 'core/components/startkit/',
                ['deleteTop' => true, 'skipDirs' => false, 'extensions' => []]
            );
            symlink(MODX_CORE_PATH . 'components/startkit/', $dev . 'core/components/startkit');
        }
    }
}

return true;