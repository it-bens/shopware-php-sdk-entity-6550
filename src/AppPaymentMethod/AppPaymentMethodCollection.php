<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\AppPaymentMethod;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<AppPaymentMethodEntity>
 */
class AppPaymentMethodCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return AppPaymentMethodEntity::class;
    }
}
