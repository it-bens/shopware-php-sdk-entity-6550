<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\CustomerRecovery;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Customer\CustomerEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class CustomerRecoveryEntity extends Entity
{
    public ?CustomerEntity $customer = null;

    public ?string $customerId = null;

    public ?string $hash = null;
}
