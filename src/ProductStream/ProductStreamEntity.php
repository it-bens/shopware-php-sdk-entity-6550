<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\ProductStream;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Category\CategoryCollection;
use ITB\ShopwareSdkEntity\ProductCrossSelling\ProductCrossSellingCollection;
use ITB\ShopwareSdkEntity\ProductExport\ProductExportCollection;
use ITB\ShopwareSdkEntity\ProductStreamFilter\ProductStreamFilterCollection;
use ITB\ShopwareSdkEntity\ProductStreamTranslation\ProductStreamTranslationCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductStreamEntity extends Entity
{
    public ?array $apiFilter = null;

    public ?CategoryCollection $categories = null;

    public ?string $description = null;

    public ?ProductStreamFilterCollection $filters = null;

    public ?bool $invalid = null;

    public ?string $name = null;

    public ?ProductCrossSellingCollection $productCrossSellings = null;

    public ?ProductExportCollection $productExports = null;

    public ?ProductStreamTranslationCollection $translations = null;
}
