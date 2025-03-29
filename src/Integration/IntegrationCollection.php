<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\Integration;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<IntegrationEntity>
 */
class IntegrationCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return IntegrationEntity::class;
    }
}
