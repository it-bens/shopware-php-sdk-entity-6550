<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\CustomerTag;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<CustomerTagEntity>
 */
class CustomerTagCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return CustomerTagEntity::class;
    }
}
