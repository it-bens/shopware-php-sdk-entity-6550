<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\AclUserRole;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\AclRole\AclRoleEntity;
use ITB\ShopwareSdkEntity\User\UserEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class AclUserRoleEntity extends Entity
{
    public ?AclRoleEntity $aclRole = null;

    public ?string $aclRoleId = null;

    public ?UserEntity $user = null;

    public ?string $userId = null;
}
