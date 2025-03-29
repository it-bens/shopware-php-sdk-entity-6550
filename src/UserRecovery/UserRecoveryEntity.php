<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\UserRecovery;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\User\UserEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class UserRecoveryEntity extends Entity
{
    public ?string $hash = null;

    public ?UserEntity $user = null;

    public ?string $userId = null;
}
