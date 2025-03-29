<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\AclRole;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<AclRoleEntity>
 */
class AclRoleCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return AclRoleEntity::class;
    }
}
