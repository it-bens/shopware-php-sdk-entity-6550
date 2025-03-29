<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\PromotionPersonaCustomer;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<PromotionPersonaCustomerEntity>
 */
class PromotionPersonaCustomerCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return PromotionPersonaCustomerEntity::class;
    }
}
