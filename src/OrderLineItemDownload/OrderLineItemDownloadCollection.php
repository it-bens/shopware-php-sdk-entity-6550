<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\OrderLineItemDownload;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<OrderLineItemDownloadEntity>
 */
class OrderLineItemDownloadCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return OrderLineItemDownloadEntity::class;
    }
}
