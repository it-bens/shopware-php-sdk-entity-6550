<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\ProductMedia;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Media\MediaEntity;
use ITB\ShopwareSdkEntity\Product\ProductCollection;
use ITB\ShopwareSdkEntity\Product\ProductEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductMediaEntity extends Entity
{
    public ?ProductCollection $coverProducts = null;

    public ?MediaEntity $media = null;

    public ?string $mediaId = null;

    public ?int $position = null;

    public ?ProductEntity $product = null;

    public ?string $productId = null;

    public ?string $productVersionId = null;
}
