<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\VersionCommitData;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\VersionCommit\VersionCommitEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class VersionCommitDataEntity extends Entity
{
    public ?string $action = null;

    public ?int $autoIncrement = null;

    public ?VersionCommitEntity $commit = null;

    public ?array $entityId = null;

    public ?string $entityName = null;

    public ?string $integrationId = null;

    public ?array $payload = null;

    public ?string $userId = null;

    public ?string $versionCommitId = null;
}
