<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\ImportExportProfile;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<ImportExportProfileEntity>
 */
class ImportExportProfileCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return ImportExportProfileEntity::class;
    }
}
