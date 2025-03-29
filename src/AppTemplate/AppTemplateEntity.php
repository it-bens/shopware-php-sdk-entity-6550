<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\AppTemplate;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\App\AppEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class AppTemplateEntity extends Entity
{
    public ?bool $active = null;

    public ?AppEntity $app = null;

    public ?string $appId = null;

    public ?string $path = null;

    public ?string $template = null;
}
