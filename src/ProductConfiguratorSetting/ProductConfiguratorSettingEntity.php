<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\ProductConfiguratorSetting;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Media\MediaEntity;
use ITB\ShopwareSdkEntity\Product\ProductEntity;
use ITB\ShopwareSdkEntity\PropertyGroupOption\PropertyGroupOptionEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductConfiguratorSettingEntity extends Entity
{
    public ?MediaEntity $media = null;

    public ?string $mediaId = null;

    public ?PropertyGroupOptionEntity $option = null;

    public ?string $optionId = null;

    public ?int $position = null;

    public ?array $price = null;

    public ?ProductEntity $product = null;

    public ?string $productId = null;

    public ?string $productVersionId = null;
}
