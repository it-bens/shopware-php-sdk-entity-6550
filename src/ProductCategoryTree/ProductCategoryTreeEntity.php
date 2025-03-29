<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\ProductCategoryTree;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Category\CategoryEntity;
use ITB\ShopwareSdkEntity\Product\ProductEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductCategoryTreeEntity extends Entity
{
    public ?CategoryEntity $category = null;

    public ?string $categoryId = null;

    public ?string $categoryVersionId = null;

    public ?ProductEntity $product = null;

    public ?string $productId = null;

    public ?string $productVersionId = null;
}
