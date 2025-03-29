<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\ImportExportLog;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<ImportExportLogEntity>
 */
class ImportExportLogCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return ImportExportLogEntity::class;
    }
}
