<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\ProductKeywordDictionary;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<ProductKeywordDictionaryEntity>
 */
class ProductKeywordDictionaryCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return ProductKeywordDictionaryEntity::class;
    }
}
