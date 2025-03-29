<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\ProductFeatureSet;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<ProductFeatureSetEntity>
 */
class ProductFeatureSetCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return ProductFeatureSetEntity::class;
    }
}
