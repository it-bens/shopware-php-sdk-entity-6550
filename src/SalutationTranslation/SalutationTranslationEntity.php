<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\SalutationTranslation;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Language\LanguageEntity;
use ITB\ShopwareSdkEntity\Salutation\SalutationEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class SalutationTranslationEntity extends Entity
{
    public ?string $displayName = null;

    public ?LanguageEntity $language = null;

    public ?string $languageId = null;

    public ?string $letterName = null;

    public ?SalutationEntity $salutation = null;

    public ?string $salutationId = null;
}
