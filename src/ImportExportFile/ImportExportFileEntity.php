<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\ImportExportFile;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\ImportExportLog\ImportExportLogEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class ImportExportFileEntity extends Entity
{
    public ?string $accessToken = null;

    public ?\DateTimeInterface $expireDate = null;

    public ?ImportExportLogEntity $log = null;

    public ?string $originalName = null;

    public ?string $path = null;

    public ?int $size = null;
}
