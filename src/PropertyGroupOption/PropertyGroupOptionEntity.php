<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\PropertyGroupOption;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Media\MediaEntity;
use ITB\ShopwareSdkEntity\Product\ProductCollection;
use ITB\ShopwareSdkEntity\ProductConfiguratorSetting\ProductConfiguratorSettingCollection;
use ITB\ShopwareSdkEntity\PropertyGroup\PropertyGroupEntity;
use ITB\ShopwareSdkEntity\PropertyGroupOptionTranslation\PropertyGroupOptionTranslationCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class PropertyGroupOptionEntity extends Entity
{
    public ?string $colorHexCode = null;

    public ?PropertyGroupEntity $group = null;

    public ?string $groupId = null;

    public ?MediaEntity $media = null;

    public ?string $mediaId = null;

    public ?string $name = null;

    public ?int $position = null;

    public ?ProductConfiguratorSettingCollection $productConfiguratorSettings = null;

    public ?ProductCollection $productOptions = null;

    public ?ProductCollection $productProperties = null;

    public ?PropertyGroupOptionTranslationCollection $translations = null;
}
