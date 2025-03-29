<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\ProductCrossSellingAssignedProducts;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Product\ProductEntity;
use ITB\ShopwareSdkEntity\ProductCrossSelling\ProductCrossSellingEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductCrossSellingAssignedProductsEntity extends Entity
{
    public ?ProductCrossSellingEntity $crossSelling = null;

    public ?string $crossSellingId = null;

    public ?int $position = null;

    public ?ProductEntity $product = null;

    public ?string $productId = null;

    public ?string $productVersionId = null;
}
