<?php

namespace Slab\Updater;

/**
 * Initialize Slab Updater
 *
 * @param Slab\Core\Application
 * @return void
 **/
function slab_updater_init($slab) {

	$slab->autoloader->registerNamespace('Slab\Updater', SLAB_UPDATER_DIR . 'src');

}
