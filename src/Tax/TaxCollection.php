<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\Tax;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<TaxEntity>
 */
class TaxCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return TaxEntity::class;
    }
}
