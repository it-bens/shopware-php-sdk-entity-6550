<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\VersionCommit;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Version\VersionEntity;
use ITB\ShopwareSdkEntity\VersionCommitData\VersionCommitDataCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class VersionCommitEntity extends Entity
{
    public ?int $autoIncrement = null;

    public ?VersionCommitDataCollection $data = null;

    public ?string $integrationId = null;

    public ?bool $isMerge = null;

    public ?string $message = null;

    public ?string $userId = null;

    public ?VersionEntity $version = null;
}
