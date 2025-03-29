<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\Unit;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Product\ProductCollection;
use ITB\ShopwareSdkEntity\UnitTranslation\UnitTranslationCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class UnitEntity extends Entity
{
    public ?string $name = null;

    public ?ProductCollection $products = null;

    public ?string $shortCode = null;

    public ?UnitTranslationCollection $translations = null;
}
