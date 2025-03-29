<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\Integration;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\AclRole\AclRoleCollection;
use ITB\ShopwareSdkEntity\App\AppEntity;
use ITB\ShopwareSdkEntity\NotificationCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class IntegrationEntity extends Entity
{
    public ?string $accessKey = null;

    public ?AclRoleCollection $aclRoles = null;

    public ?bool $admin = null;

    public ?AppEntity $app = null;

    public ?NotificationCollection $createdNotifications = null;

    public ?\DateTimeInterface $deletedAt = null;

    public ?string $label = null;

    public ?\DateTimeInterface $lastUsageAt = null;

    public ?string $secretAccessKey = null;

    public ?bool $writeAccess = null;
}
