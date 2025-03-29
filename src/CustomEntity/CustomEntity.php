<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\CustomEntity;

use ITB\ShopwareSdkDataCore\Entity\Entity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class CustomEntity extends Entity
{
    public ?string $appId = null;

    public ?bool $cmsAware = null;

    public ?bool $customFieldsAware = null;

    public ?array $fields = null;

    public ?array $flags = null;

    public ?string $labelProperty = null;

    public ?string $name = null;

    public ?string $pluginId = null;

    public ?bool $storeApiAware = null;
}
