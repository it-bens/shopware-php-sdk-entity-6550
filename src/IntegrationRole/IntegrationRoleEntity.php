<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\IntegrationRole;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\AclRole\AclRoleEntity;
use ITB\ShopwareSdkEntity\Integration\IntegrationEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class IntegrationRoleEntity extends Entity
{
    public ?string $aclRoleId = null;

    public ?IntegrationEntity $integration = null;

    public ?string $integrationId = null;

    public ?AclRoleEntity $role = null;
}
