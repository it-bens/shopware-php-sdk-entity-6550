<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\ProductFeatureSetTranslation;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Language\LanguageEntity;
use ITB\ShopwareSdkEntity\ProductFeatureSet\ProductFeatureSetEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductFeatureSetTranslationEntity extends Entity
{
    public ?string $description = null;

    public ?LanguageEntity $language = null;

    public ?string $languageId = null;

    public ?string $name = null;

    public ?ProductFeatureSetEntity $productFeatureSet = null;

    public ?string $productFeatureSetId = null;
}
