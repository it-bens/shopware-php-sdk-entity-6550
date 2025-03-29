<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\ProductFeatureSet;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Product\ProductCollection;
use ITB\ShopwareSdkEntity\ProductFeatureSetTranslation\ProductFeatureSetTranslationCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductFeatureSetEntity extends Entity
{
    public ?string $description = null;

    public ?array $features = null;

    public ?string $name = null;

    public ?ProductCollection $products = null;

    public ?ProductFeatureSetTranslationCollection $translations = null;
}
