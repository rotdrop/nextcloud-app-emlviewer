<?php

namespace OCA\EmlViewer\AppInfo;

use Exception;
use OCP\AppFramework\App;
use OCP\AppFramework\Bootstrap\IBootstrap;
use OCP\AppFramework\Bootstrap\IBootContext;
use OCP\AppFramework\Bootstrap\IRegistrationContext;
use OCP\AppFramework\Http\EmptyContentSecurityPolicy;
use OCP\EventDispatcher\IEventDispatcher;
use OCP\Security\CSP\AddContentSecurityPolicyEvent;
use OCP\Util;
use OCA\Files_Sharing\Event\BeforeTemplateRenderedEvent;
use OCA\Files\Event\LoadAdditionalScriptsEvent;

use OCA\EmlViewer\Storage\AuthorStorage;
use OCA\EmlViewer\Listener\LoadAdditionalScriptsListener;
use OCA\EmlViewer\Listener\CSPListener;

class Application extends App implements IBootstrap
{

    const APP_ID = 'emlviewer';

    public function __construct()
    {
        parent::__construct(self::APP_ID);
    }

    public function register(IRegistrationContext $context): void
    {
        // ... registration logic goes here ...

        if ((@include_once __DIR__ . '/../../vendor/autoload.php') === false) {
            throw new Exception('Cannot include autoload. Did you run install dependencies using composer?');
        }

        $context->registerEventListener(AddContentSecurityPolicyEvent::class, CSPListener::class);
        $context->registerEventListener(BeforeTemplateRenderedEvent::class, LoadAdditionalScriptsListener::class);
        $context->registerEventListener(LoadAdditionalScriptsEvent::class, LoadAdditionalScriptsListener::class);

        /**
         * Storage Layer
         */
        $context->registerService('AuthorStorage', function ($c) {
            return new AuthorStorage($c->get('RootStorage'));
        });

        $context->registerService('RootStorage', function ($c) {
            return $c->get('ServerContainer')->getUserFolder();
        });
    }

    public function boot(IBootContext $context): void
    {
        // ... boot logic goes here ...


    }
}
