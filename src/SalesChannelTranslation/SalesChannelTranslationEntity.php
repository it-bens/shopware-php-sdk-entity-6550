<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\SalesChannelTranslation;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Language\LanguageEntity;
use ITB\ShopwareSdkEntity\SalesChannel\SalesChannelEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class SalesChannelTranslationEntity extends Entity
{
    public ?bool $homeEnabled = null;

    public ?string $homeKeywords = null;

    public ?string $homeMetaDescription = null;

    public ?string $homeMetaTitle = null;

    public ?string $homeName = null;

    public ?array $homeSlotConfig = null;

    public ?LanguageEntity $language = null;

    public ?string $languageId = null;

    public ?string $name = null;

    public ?SalesChannelEntity $salesChannel = null;

    public ?string $salesChannelId = null;
}
