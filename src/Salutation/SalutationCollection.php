<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\Salutation;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<SalutationEntity>
 */
class SalutationCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return SalutationEntity::class;
    }
}
