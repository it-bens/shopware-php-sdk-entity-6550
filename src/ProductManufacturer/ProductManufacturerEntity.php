<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\ProductManufacturer;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Media\MediaEntity;
use ITB\ShopwareSdkEntity\Product\ProductCollection;
use ITB\ShopwareSdkEntity\ProductManufacturerTranslation\ProductManufacturerTranslationCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductManufacturerEntity extends Entity
{
    public ?string $description = null;

    public ?string $link = null;

    public ?MediaEntity $media = null;

    public ?string $mediaId = null;

    public ?string $name = null;

    public ?ProductCollection $products = null;

    public ?ProductManufacturerTranslationCollection $translations = null;
}
