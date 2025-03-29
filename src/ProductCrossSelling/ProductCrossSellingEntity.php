<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\ProductCrossSelling;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Product\ProductEntity;
use ITB\ShopwareSdkEntity\ProductCrossSellingAssignedProducts\ProductCrossSellingAssignedProductsCollection;
use ITB\ShopwareSdkEntity\ProductCrossSellingTranslation\ProductCrossSellingTranslationCollection;
use ITB\ShopwareSdkEntity\ProductStream\ProductStreamEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductCrossSellingEntity extends Entity
{
    public ?bool $active = null;

    public ?ProductCrossSellingAssignedProductsCollection $assignedProducts = null;

    public ?int $limit = null;

    public ?string $name = null;

    public ?int $position = null;

    public ?ProductEntity $product = null;

    public ?string $productId = null;

    public ?ProductStreamEntity $productStream = null;

    public ?string $productStreamId = null;

    public ?string $productVersionId = null;

    public ?string $sortBy = null;

    public ?string $sortDirection = null;

    public ?ProductCrossSellingTranslationCollection $translations = null;

    public ?string $type = null;
}
