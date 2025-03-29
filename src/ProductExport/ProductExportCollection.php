<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\ProductExport;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<ProductExportEntity>
 */
class ProductExportCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return ProductExportEntity::class;
    }
}
