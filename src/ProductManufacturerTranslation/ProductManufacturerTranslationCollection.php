<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\ProductManufacturerTranslation;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<ProductManufacturerTranslationEntity>
 */
class ProductManufacturerTranslationCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return ProductManufacturerTranslationEntity::class;
    }
}
