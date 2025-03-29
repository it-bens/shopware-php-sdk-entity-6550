<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\ProductTranslation;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Language\LanguageEntity;
use ITB\ShopwareSdkEntity\Product\ProductEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductTranslationEntity extends Entity
{
    public ?array $customSearchKeywords = null;

    public ?string $description = null;

    public ?string $keywords = null;

    public ?LanguageEntity $language = null;

    public ?string $languageId = null;

    public ?string $metaDescription = null;

    public ?string $metaTitle = null;

    public ?string $name = null;

    public ?string $packUnit = null;

    public ?string $packUnitPlural = null;

    public ?ProductEntity $product = null;

    public ?string $productId = null;

    public ?string $productVersionId = null;

    public ?array $slotConfig = null;
}
