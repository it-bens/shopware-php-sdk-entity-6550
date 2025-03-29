<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\Unit;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<UnitEntity>
 */
class UnitCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return UnitEntity::class;
    }
}
