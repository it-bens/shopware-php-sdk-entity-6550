<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\ProductCategoryTree;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<ProductCategoryTreeEntity>
 */
class ProductCategoryTreeCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return ProductCategoryTreeEntity::class;
    }
}
