<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\PluginTranslation;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Language\LanguageEntity;
use ITB\ShopwareSdkEntity\Plugin\PluginEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class PluginTranslationEntity extends Entity
{
    public ?array $changelog = null;

    public ?string $description = null;

    public ?string $label = null;

    public ?LanguageEntity $language = null;

    public ?string $languageId = null;

    public ?string $manufacturerLink = null;

    public ?PluginEntity $plugin = null;

    public ?string $pluginId = null;

    public ?string $supportLink = null;
}
