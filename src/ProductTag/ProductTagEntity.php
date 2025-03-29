<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\ProductTag;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Product\ProductEntity;
use ITB\ShopwareSdkEntity\Tag\TagEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductTagEntity extends Entity
{
    public ?ProductEntity $product = null;

    public ?string $productId = null;

    public ?string $productVersionId = null;

    public ?TagEntity $tag = null;

    public ?string $tagId = null;
}
