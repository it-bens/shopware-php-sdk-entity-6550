<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\ProductSorting;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\ProductSortingTranslation\ProductSortingTranslationCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductSortingEntity extends Entity
{
    public ?bool $active = null;

    public ?array $fields = null;

    public ?string $key = null;

    public ?string $label = null;

    public ?bool $locked = null;

    public ?int $priority = null;

    public ?ProductSortingTranslationCollection $translations = null;
}
