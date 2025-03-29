<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\UserAccessKey;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\User\UserEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class UserAccessKeyEntity extends Entity
{
    public ?string $accessKey = null;

    public ?\DateTimeInterface $lastUsageAt = null;

    public ?string $secretAccessKey = null;

    public ?UserEntity $user = null;

    public ?string $userId = null;
}
