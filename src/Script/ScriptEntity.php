<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\Script;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\App\AppEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class ScriptEntity extends Entity
{
    public ?bool $active = null;

    public ?AppEntity $app = null;

    public ?string $appId = null;

    public ?string $hook = null;

    public ?string $name = null;

    public ?string $script = null;
}
