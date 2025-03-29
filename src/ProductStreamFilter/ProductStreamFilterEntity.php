<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\ProductStreamFilter;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\ProductStream\ProductStreamEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductStreamFilterEntity extends Entity
{
    public ?string $field = null;

    public ?string $operator = null;

    public ?array $parameters = null;

    public ?ProductStreamFilterEntity $parent = null;

    public ?string $parentId = null;

    public ?int $position = null;

    public ?ProductStreamEntity $productStream = null;

    public ?string $productStreamId = null;

    public ?ProductStreamFilterCollection $queries = null;

    public ?string $type = null;

    public ?string $value = null;
}
