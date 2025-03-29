<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\ProductStreamTranslation;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Language\LanguageEntity;
use ITB\ShopwareSdkEntity\ProductStream\ProductStreamEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductStreamTranslationEntity extends Entity
{
    public ?string $description = null;

    public ?LanguageEntity $language = null;

    public ?string $languageId = null;

    public ?string $name = null;

    public ?ProductStreamEntity $productStream = null;

    public ?string $productStreamId = null;
}
