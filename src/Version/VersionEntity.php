<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\Version;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\VersionCommit\VersionCommitCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class VersionEntity extends Entity
{
    public ?VersionCommitCollection $commits = null;

    public ?string $name = null;
}
