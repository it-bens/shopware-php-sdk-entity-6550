<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\SalesChannelLanguage;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Language\LanguageEntity;
use ITB\ShopwareSdkEntity\SalesChannel\SalesChannelEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class SalesChannelLanguageEntity extends Entity
{
    public ?LanguageEntity $language = null;

    public ?string $languageId = null;

    public ?SalesChannelEntity $salesChannel = null;

    public ?string $salesChannelId = null;
}
