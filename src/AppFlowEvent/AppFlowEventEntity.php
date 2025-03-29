<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\AppFlowEvent;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\App\AppEntity;
use ITB\ShopwareSdkEntity\Flow\FlowCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class AppFlowEventEntity extends Entity
{
    public ?AppEntity $app = null;

    public ?string $appId = null;

    public ?array $aware = null;

    public ?FlowCollection $flows = null;

    public ?string $name = null;
}
