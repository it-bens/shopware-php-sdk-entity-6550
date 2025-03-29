<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\User;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<UserEntity>
 */
class UserCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return UserEntity::class;
    }
}
