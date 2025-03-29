<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\ProductCrossSellingTranslation;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Language\LanguageEntity;
use ITB\ShopwareSdkEntity\ProductCrossSelling\ProductCrossSellingEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductCrossSellingTranslationEntity extends Entity
{
    public ?LanguageEntity $language = null;

    public ?string $languageId = null;

    public ?string $name = null;

    public ?ProductCrossSellingEntity $productCrossSelling = null;

    public ?string $productCrossSellingId = null;
}
