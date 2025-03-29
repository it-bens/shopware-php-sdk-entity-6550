<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\ProductStreamMapping;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Product\ProductEntity;
use ITB\ShopwareSdkEntity\ProductStream\ProductStreamEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductStreamMappingEntity extends Entity
{
    public ?ProductEntity $product = null;

    public ?string $productId = null;

    public ?ProductStreamEntity $productStream = null;

    public ?string $productStreamId = null;

    public ?string $productVersionId = null;
}
