<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\ProductSearchKeyword;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<ProductSearchKeywordEntity>
 */
class ProductSearchKeywordCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return ProductSearchKeywordEntity::class;
    }
}
