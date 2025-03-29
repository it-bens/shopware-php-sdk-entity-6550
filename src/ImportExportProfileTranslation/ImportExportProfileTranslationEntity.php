<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\ImportExportProfileTranslation;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\ImportExportProfile\ImportExportProfileEntity;
use ITB\ShopwareSdkEntity\Language\LanguageEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class ImportExportProfileTranslationEntity extends Entity
{
    public ?ImportExportProfileEntity $importExportProfile = null;

    public ?string $importExportProfileId = null;

    public ?string $label = null;

    public ?LanguageEntity $language = null;

    public ?string $languageId = null;
}
