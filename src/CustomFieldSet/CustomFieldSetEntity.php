<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\CustomFieldSet;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\App\AppEntity;
use ITB\ShopwareSdkEntity\CustomFieldSetRelation\CustomFieldSetRelationCollection;
use ITB\ShopwareSdkEntity\Product\ProductCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class CustomFieldSetEntity extends Entity
{
    public ?bool $active = null;

    public ?AppEntity $app = null;

    public ?string $appId = null;

    public ?array $config = null;

    public ?bool $global = null;

    public ?string $name = null;

    public ?int $position = null;

    public ?ProductCollection $products = null;

    public ?CustomFieldSetRelationCollection $relations = null;
}
