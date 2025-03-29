<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\Theme;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Media\MediaCollection;
use ITB\ShopwareSdkEntity\Media\MediaEntity;
use ITB\ShopwareSdkEntity\SalesChannel\SalesChannelCollection;
use ITB\ShopwareSdkEntity\ThemeTranslation\ThemeTranslationCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class ThemeEntity extends Entity
{
    public ?bool $active = null;

    public ?string $author = null;

    public ?array $baseConfig = null;

    public ?array $configValues = null;

    public ?ThemeCollection $dependentThemes = null;

    public ?string $description = null;

    public ?array $helpTexts = null;

    public ?array $labels = null;

    public ?MediaCollection $media = null;

    public ?string $name = null;

    public ?string $parentThemeId = null;

    public ?MediaEntity $previewMedia = null;

    public ?string $previewMediaId = null;

    public ?SalesChannelCollection $salesChannels = null;

    public ?string $technicalName = null;

    public ?array $themeJson = null;

    public ?ThemeTranslationCollection $translations = null;
}
