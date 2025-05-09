<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\Webhook;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<WebhookEntity>
 */
class WebhookCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return WebhookEntity::class;
    }
}
