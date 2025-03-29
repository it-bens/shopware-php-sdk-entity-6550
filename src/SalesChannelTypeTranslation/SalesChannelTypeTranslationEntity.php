<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\SalesChannelTypeTranslation;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Language\LanguageEntity;
use ITB\ShopwareSdkEntity\SalesChannelType\SalesChannelTypeEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class SalesChannelTypeTranslationEntity extends Entity
{
    public ?string $description = null;

    public ?string $descriptionLong = null;

    public ?LanguageEntity $language = null;

    public ?string $languageId = null;

    public ?string $manufacturer = null;

    public ?string $name = null;

    public ?SalesChannelTypeEntity $salesChannelType = null;

    public ?string $salesChannelTypeId = null;
}
