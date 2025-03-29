<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\CustomerAddress;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<CustomerAddressEntity>
 */
class CustomerAddressCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return CustomerAddressEntity::class;
    }
}
