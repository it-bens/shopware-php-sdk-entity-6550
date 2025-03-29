<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\UserConfig;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\User\UserEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class UserConfigEntity extends Entity
{
    public ?string $key = null;

    public ?UserEntity $user = null;

    public ?string $userId = null;

    public ?array $value = null;
}
