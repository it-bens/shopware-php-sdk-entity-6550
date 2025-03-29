<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\ProductKeywordDictionary;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Language\LanguageEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductKeywordDictionaryEntity extends Entity
{
    public ?string $keyword = null;

    public ?LanguageEntity $language = null;

    public ?string $languageId = null;

    public ?string $reversed = null;
}
