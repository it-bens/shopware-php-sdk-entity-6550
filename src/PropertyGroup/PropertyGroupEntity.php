<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\PropertyGroup;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\PropertyGroupOption\PropertyGroupOptionCollection;
use ITB\ShopwareSdkEntity\PropertyGroupTranslation\PropertyGroupTranslationCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class PropertyGroupEntity extends Entity
{
    public ?string $description = null;

    public ?string $displayType = null;

    public ?bool $filterable = null;

    public ?string $name = null;

    public ?PropertyGroupOptionCollection $options = null;

    public ?int $position = null;

    public ?string $sortingType = null;

    public ?PropertyGroupTranslationCollection $translations = null;

    public ?bool $visibleOnProductDetailPage = null;
}
