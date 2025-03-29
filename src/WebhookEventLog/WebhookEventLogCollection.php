<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\WebhookEventLog;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<WebhookEventLogEntity>
 */
class WebhookEventLogCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return WebhookEventLogEntity::class;
    }
}
