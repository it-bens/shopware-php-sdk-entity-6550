<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\ProductDownload;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<ProductDownloadEntity>
 */
class ProductDownloadCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return ProductDownloadEntity::class;
    }
}
