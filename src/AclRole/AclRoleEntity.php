<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\AclRole;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\App\AppEntity;
use ITB\ShopwareSdkEntity\Integration\IntegrationCollection;
use ITB\ShopwareSdkEntity\User\UserCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class AclRoleEntity extends Entity
{
    public ?AppEntity $app = null;

    public ?\DateTimeInterface $deletedAt = null;

    public ?string $description = null;

    public ?IntegrationCollection $integrations = null;

    public ?string $name = null;

    public ?array $privileges = null;

    public ?UserCollection $users = null;
}
