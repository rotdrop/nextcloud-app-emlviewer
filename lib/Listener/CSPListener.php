<?php

declare(strict_types=1);

namespace OCA\EmlViewer\Listener;

use OCP\AppFramework\Http\ContentSecurityPolicy;
use OCP\EventDispatcher\Event;
use OCP\EventDispatcher\IEventListener;
use OCP\Security\CSP\AddContentSecurityPolicyEvent;

class CSPListener implements IEventListener {
    public function handle(Event $event): void {
        if (!($event instanceof AddContentSecurityPolicyEvent)) {
            return;
        }

        $policy = new ContentSecurityPolicy();

        $policy->addAllowedStyleDomain('\'self\'');
        $policy->addAllowedStyleDomain('*');
        $policy->addAllowedFontDomain('*');
        $policy->addAllowedScriptDomain('\'self\'');

        $policy->addAllowedImageDomain('*');
        $policy->addAllowedImageDomain('data:');
        $policy->addAllowedImageDomain('blob:');
        $policy->addAllowedImageDomain('cid:');

        $policy->addAllowedMediaDomain('\'self\'');
        $policy->addAllowedMediaDomain('blob:');

        $policy->addAllowedChildSrcDomain('\'self\'');
        $policy->addAllowedChildSrcDomain('blob:');

        $policy->addAllowedConnectDomain('\'self\'');

        $event->addPolicy($policy);
    }
}
