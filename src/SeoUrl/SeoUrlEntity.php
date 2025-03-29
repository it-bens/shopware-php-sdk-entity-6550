<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\SeoUrl;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Language\LanguageEntity;
use ITB\ShopwareSdkEntity\SalesChannel\SalesChannelEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class SeoUrlEntity extends Entity
{
    public ?string $foreignKey = null;

    public ?bool $isCanonical = null;

    public ?bool $isDeleted = null;

    public ?bool $isModified = null;

    public ?bool $isValid = null;

    public ?LanguageEntity $language = null;

    public ?string $languageId = null;

    public ?string $pathInfo = null;

    public ?string $routeName = null;

    public ?SalesChannelEntity $salesChannel = null;

    public ?string $salesChannelId = null;

    public ?string $seoPathInfo = null;

    public ?string $url = null;
}
