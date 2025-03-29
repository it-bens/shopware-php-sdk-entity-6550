<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\TaxProviderTranslation;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Language\LanguageEntity;
use ITB\ShopwareSdkEntity\TaxProvider\TaxProviderEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class TaxProviderTranslationEntity extends Entity
{
    public ?LanguageEntity $language = null;

    public ?string $languageId = null;

    public ?string $name = null;

    public ?TaxProviderEntity $taxProvider = null;

    public ?string $taxProviderId = null;
}
