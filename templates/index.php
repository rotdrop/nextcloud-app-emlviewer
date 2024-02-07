<?php

use OCP\EventDispatcher\IEventDispatcher;
$eventDispatcher = \OC::$server->get(IEventDispatcher::class);
$eventDispatcher->addListener(\OCA\Files\Event\LoadAdditionalScriptsEvent::class, function () {
    Util::addInitScript('emlviewer', 'script');
});

Util::addInitScript('emlviewer', 'script');
Util::addStyle('emlviewer', 'style');
?>

