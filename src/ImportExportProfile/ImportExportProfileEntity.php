<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\ImportExportProfile;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\ImportExportLog\ImportExportLogCollection;
use ITB\ShopwareSdkEntity\ImportExportProfileTranslation\ImportExportProfileTranslationCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class ImportExportProfileEntity extends Entity
{
    public ?array $config = null;

    public ?string $delimiter = null;

    public ?string $enclosure = null;

    public ?string $fileType = null;

    public ?ImportExportLogCollection $importExportLogs = null;

    public ?string $label = null;

    public ?array $mapping = null;

    public ?string $name = null;

    public ?string $sourceEntity = null;

    public ?bool $systemDefault = null;

    public ?ImportExportProfileTranslationCollection $translations = null;

    public ?string $type = null;

    public ?array $updateBy = null;
}
