<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\ProductFeatureSetTranslation;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<ProductFeatureSetTranslationEntity>
 */
class ProductFeatureSetTranslationCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return ProductFeatureSetTranslationEntity::class;
    }
}
