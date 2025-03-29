<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\UserConfig;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<UserConfigEntity>
 */
class UserConfigCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return UserConfigEntity::class;
    }
}
