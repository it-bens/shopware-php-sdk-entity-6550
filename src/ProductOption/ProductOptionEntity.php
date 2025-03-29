<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\ProductOption;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Product\ProductEntity;
use ITB\ShopwareSdkEntity\PropertyGroupOption\PropertyGroupOptionEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductOptionEntity extends Entity
{
    public ?PropertyGroupOptionEntity $option = null;

    public ?string $optionId = null;

    public ?ProductEntity $product = null;

    public ?string $productId = null;

    public ?string $productVersionId = null;
}
