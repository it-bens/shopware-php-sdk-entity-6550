<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\IntegrationRole;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<IntegrationRoleEntity>
 */
class IntegrationRoleCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return IntegrationRoleEntity::class;
    }
}
