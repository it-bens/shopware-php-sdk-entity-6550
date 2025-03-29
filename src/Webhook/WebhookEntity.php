<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\Webhook;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\App\AppEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class WebhookEntity extends Entity
{
    public ?bool $active = null;

    public ?AppEntity $app = null;

    public ?string $appId = null;

    public ?int $errorCount = null;

    public ?string $eventName = null;

    public ?string $name = null;

    public ?string $url = null;
}
