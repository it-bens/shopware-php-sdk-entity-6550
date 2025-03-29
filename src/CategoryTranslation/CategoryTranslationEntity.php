<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\CategoryTranslation;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Category\CategoryEntity;
use ITB\ShopwareSdkEntity\Language\LanguageEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class CategoryTranslationEntity extends Entity
{
    public ?array $breadcrumb = null;

    public ?CategoryEntity $category = null;

    public ?string $categoryId = null;

    public ?string $categoryVersionId = null;

    public ?string $description = null;

    public ?string $externalLink = null;

    public ?string $internalLink = null;

    public ?string $keywords = null;

    public ?LanguageEntity $language = null;

    public ?string $languageId = null;

    public ?bool $linkNewTab = null;

    public ?string $linkType = null;

    public ?string $metaDescription = null;

    public ?string $metaTitle = null;

    public ?string $name = null;

    public ?array $slotConfig = null;
}
