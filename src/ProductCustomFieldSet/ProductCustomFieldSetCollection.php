<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\ProductCustomFieldSet;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<ProductCustomFieldSetEntity>
 */
class ProductCustomFieldSetCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return ProductCustomFieldSetEntity::class;
    }
}
