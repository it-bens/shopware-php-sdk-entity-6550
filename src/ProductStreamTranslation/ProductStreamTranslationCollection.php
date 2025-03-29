<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\ProductStreamTranslation;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<ProductStreamTranslationEntity>
 */
class ProductStreamTranslationCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return ProductStreamTranslationEntity::class;
    }
}
