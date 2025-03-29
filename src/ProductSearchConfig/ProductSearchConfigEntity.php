<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\ProductSearchConfig;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Language\LanguageEntity;
use ITB\ShopwareSdkEntity\ProductSearchConfigField\ProductSearchConfigFieldCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductSearchConfigEntity extends Entity
{
    public ?bool $andLogic = null;

    public ?ProductSearchConfigFieldCollection $configFields = null;

    public ?array $excludedTerms = null;

    public ?LanguageEntity $language = null;

    public ?string $languageId = null;

    public ?int $minSearchLength = null;
}
