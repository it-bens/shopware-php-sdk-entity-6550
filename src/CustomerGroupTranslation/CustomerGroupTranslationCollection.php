<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\CustomerGroupTranslation;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<CustomerGroupTranslationEntity>
 */
class CustomerGroupTranslationCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return CustomerGroupTranslationEntity::class;
    }
}
