<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\PaymentMethod;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<PaymentMethodEntity>
 */
class PaymentMethodCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return PaymentMethodEntity::class;
    }
}
