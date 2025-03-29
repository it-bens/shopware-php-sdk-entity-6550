<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\ImportExportFile;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<ImportExportFileEntity>
 */
class ImportExportFileCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return ImportExportFileEntity::class;
    }
}
