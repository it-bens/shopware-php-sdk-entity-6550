<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\ProductCrossSellingTranslation;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<ProductCrossSellingTranslationEntity>
 */
class ProductCrossSellingTranslationCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return ProductCrossSellingTranslationEntity::class;
    }
}
