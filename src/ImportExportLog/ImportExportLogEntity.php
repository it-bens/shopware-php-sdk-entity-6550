<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\ImportExportLog;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\ImportExportFile\ImportExportFileEntity;
use ITB\ShopwareSdkEntity\ImportExportProfile\ImportExportProfileEntity;
use ITB\ShopwareSdkEntity\User\UserEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class ImportExportLogEntity extends Entity
{
    public ?string $activity = null;

    public ?array $config = null;

    public ?ImportExportLogEntity $failedImportLog = null;

    public ?ImportExportFileEntity $file = null;

    public ?string $fileId = null;

    public ?ImportExportLogEntity $invalidRecordsLog = null;

    public ?string $invalidRecordsLogId = null;

    public ?ImportExportProfileEntity $profile = null;

    public ?string $profileId = null;

    public ?string $profileName = null;

    public ?int $records = null;

    public ?array $result = null;

    public ?string $state = null;

    public ?UserEntity $user = null;

    public ?string $userId = null;

    public ?string $username = null;
}
