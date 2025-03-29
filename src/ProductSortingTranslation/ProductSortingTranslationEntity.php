<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\ProductSortingTranslation;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Language\LanguageEntity;
use ITB\ShopwareSdkEntity\ProductSorting\ProductSortingEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductSortingTranslationEntity extends Entity
{
    public ?string $label = null;

    public ?LanguageEntity $language = null;

    public ?string $languageId = null;

    public ?ProductSortingEntity $productSorting = null;

    public ?string $productSortingId = null;
}
